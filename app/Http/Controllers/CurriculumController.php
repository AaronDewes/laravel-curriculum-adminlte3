<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Curriculum;
use App\Grade;
use App\Subject;
use App\OrganizationType;
use App\TerminalObjective;
use App\EnablingObjective;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DOMDocument;
use App\Content;
use App\Glossar;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('curriculum_access'), 403);

        $curricula = Curriculum::all();
       
        return view('curricula.index')
          ->with(compact('curricula'));
    }
    
     public function list()
    {
        abort_unless(\Gate::allows('curriculum_access'), 403);
        $curricula = Curriculum::select([
            'id', 
            'title', 
            'state_id',
            'country_id',
            'grade_id',
            'subject_id',
            'owner_id',
            
            ]);
        
        return DataTables::of($curricula)
            ->addColumn('state', function ($curricula) {
                return $curricula->state()->first()->lang_de;                
            })
            ->addColumn('country', function ($curricula) {
                return $curricula->country()->first()->lang_de;                
            })
            ->addColumn('grade', function ($curricula) {
                return $curricula->grade()->first()->title;                
            })
            ->addColumn('subject', function ($curricula) {
                return $curricula->subject()->first()->title;                
            })
            ->addColumn('owner', function ($curricula) {
                return $curricula->owner()->first()->firstname.' '.$curricula->owner()->first()->lastname;                
            })
            ->addColumn('action', function ($curricula) {
                 $actions  = '';
                    if (\Gate::allows('curriculum_show')){
                        $actions .= '<a href="'.route('curricula.show', $curricula->id).'" '
                                    . 'class="btn btn-xs btn-success mr-1">'
                                    . '<i class="fa fa-list-alt"></i> Show'
                                    . '</a>';
                    }
                    if (\Gate::allows('curriculum_edit')){
                        $actions .= '<a href="'.route('curricula.edit', $curricula->id).'" '
                                    . 'class="btn btn-xs btn-primary mr-1">'
                                    . '<i class="fa fa-edit"></i> Edit'
                                    . '</a>';
                    }
                    if (\Gate::allows('curriculum_delete')){
                        $actions .= '<button type="button" class="btn btn-xs btn-danger" onclick="destroyCurriculum('.$curricula->id.')"><i class="fa fa-trash"></i> Delete</button>';
                    }
              
                return $actions;
            })
           
            ->addColumn('check', '')
            ->setRowId('id')
            ->setRowAttr([
                'color' => 'primary',
            ])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(\Gate::allows('curriculum_create'), 403);
        
        $grades = Grade::all();
        $subjects   = Subject::all();
        $organization_types = OrganizationType::all();
        
        return view('curricula.create')
                ->with(compact('grades'))
                ->with(compact('subjects'))
                ->with(compact('organization_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(\Gate::allows('curriculum_create'), 403);
        $input = $this->validateRequest();
        //dd($input);
        $curriculum = Curriculum::firstOrCreate([
            'title'                 => $input['title'],
            'description'           => $input['description'],
            'author'                => $input['author'],
            'publisher'             => $input['publisher'],
            'city'                  => $input['city'],
            'date'                  => $input['date'],
            'color'                 => $input['color'],
            'grade_id'              => format_select_input($input['grade_id']),
            'subject_id'            => format_select_input($input['subject_id']),
            'organization_type_id'  => format_select_input($input['organization_type_id']),
            'state_id'              => 'DE-RP',
            'country_id'            => 'DE',
            'medium_id'               => null,
            'owner_id'              => auth()->user()->id,
            
        ]);
        
        // axios call? 
        if (request()->wantsJson()){    
            return ['message' => $curriculum->path()];
        }
        
        return redirect($curriculum->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum)
    {
        
        abort_unless(\Gate::allows('curriculum_show'), 403);
        //check if user is enrolled -> else 403
        
        abort_unless((auth()->user()->curricula()->contains('curriculum_id', $curriculum->id) // user enrolled
                  OR (auth()->user()->currentRole()->first()->id == 1)), 403);                // or admin

        $terminalObjectives = TerminalObjective::where('curriculum_id', $curriculum->id)
                                                ->orderBy('objective_type_id')
                                                ->orderBy('order_id')
                                                ->with(['media'])
                                                ->get();
       
         $enablingObjectives = EnablingObjective::where('curriculum_id', $curriculum->id)
                                                ->orderBy('terminal_objective_id')
                                                ->orderBy('order_id')
                                                ->with(['media',
                                                    'mediaSubscriptions', 
                                                    'referenceSubscriptions'
//                                                    'referenceSubscriptions.siblings.reference',
//                                                    'referenceSubscriptions.siblings.referenceable.curriculum.organizationType'
                                                    ])
                                                ->get();
        $objectiveTypes = \App\ObjectiveType::all();
        
        
        
        $curriculum = Curriculum::with(['terminalObjectives', 'terminalObjectives.enablingObjectives', 'contents', 'glossar.contents', 'media'])->find($curriculum->id);
        
       //dd($enablingObjectives);
        return view('curricula.show')
                ->with(compact('curriculum'))
                ->with(compact('terminalObjectives')) //todo. curriculum already has terminal and enablingobjectives, use in DB
                ->with(compact('enablingObjectives'))
                ->with(compact('objectiveTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        abort_unless(\Gate::allows('curriculum_edit'), 403);
        
        $curriculum->update($this->validateRequest());
        
        return redirect($curriculum->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        abort_unless(\Gate::allows('curriculum_delete'), 403);
    }
    
    protected function validateRequest()
    {               
        
        return request()->validate([
            'title'                 => 'sometimes|required',
            'description'           => 'sometimes',
            'author'                => 'sometimes',
            'publisher'             => 'sometimes',
            'city'                  => 'sometimes',
            'date'                  => 'sometimes',
            'color'                 => 'sometimes',
            'grade_id'              => 'sometimes',
            'subject_id'            => 'sometimes',
            'organization_type_id'  => 'sometimes',
            'state_id'              => 'sometimes',
            'country_id'            => 'sometimes',
            'file_id'               => 'sometimes',
            'owner_id'              => 'sometimes',
            ]);
    }
}
