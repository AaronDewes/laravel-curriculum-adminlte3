<?php

namespace App\Http\Controllers;

use App\Kanban;
use App\KanbanSubscription;
use Illuminate\Http\Request;

class KanbanSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()){
            return [
                'subscribers' =>
                    [
                    'users' =>  auth()->user()->users()->select('users.id','users.firstname','users.lastname')->get(),
                    'groups' => auth()->user()->groups()->select('group_id','title')->get(),
                    'organizations' => auth()->user()->organizations()->select('organization_id','title')->get(),
                    'subscriptions' => Kanban::find(request('kanban_id'))->subscriptions()->with('subscribable')->get()
                    ]
                ];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(\Gate::allows('kanban_create'), 403);
        $input = $this->validateRequest();

        $subscribe = KanbanSubscription::updateOrCreate([
                "kanban_id"         => $input['model_id'],
                "subscribable_type" => $input['subscribable_type'],
                "subscribable_id"   => $input['subscribable_id'],
            ],[
                "editable"=> isset($input['editable']) ? $input['editable'] : false,
                "owner_id"=> auth()->user()->id,
            ]);
        $subscribe->save();

        if (request()->wantsJson()){
            return ['subscription' => Kanban::find($input['model_id'])->subscriptions()->with('subscribable')->get()];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KanbanSubscription  $kanbanSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KanbanSubscription $kanbanSubscription)
    {
        abort_unless(\Gate::allows('kanban_edit'), 403);
        $input = $this->validateRequest();

        $kanbanSubscription->update([
            "editable"=> isset($input['editable']) ? $input['editable'] : false,
            "owner_id"=> auth()->user()->id,
        ]);

        if (request()->wantsJson()){
            return ['editable' => $kanbanSubscription->editable];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KanbanSubscription  $kanbanSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(KanbanSubscription $kanbanSubscription)
    {
        abort_unless(\Gate::allows('kanban_delete'), 403);

        if (request()->wantsJson()){
            return ['message' => $kanbanSubscription->delete()];
        }

    }

    protected function validateRequest()
    {
        return request()->validate([
            'subscribable_type' => 'sometimes|string',
            'subscribable_id'   => 'sometimes|integer',
            'model_id'          => 'sometimes|integer',
            'editable'          => 'sometimes',
        ]);
    }
}
