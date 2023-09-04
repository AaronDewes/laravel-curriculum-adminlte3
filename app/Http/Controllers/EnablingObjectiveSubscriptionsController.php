<?php

namespace App\Http\Controllers;

use App\EnablingObjective;
use App\EnablingObjectiveSubscriptions;
use Illuminate\Http\Request;

class EnablingObjectiveSubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = $this->validateRequest();
        if (isset($input['subscribable_type']) and isset($input['subscribable_id'])) {
            $model = $input['subscribable_type']::find($input['subscribable_id']);
            abort_unless((\Gate::allows('curriculum_show') and $model->isAccessible()), 403);

            if (request()->wantsJson()) {
                return [
                    'subscriptions' =>
                        EnablingObjectiveSubscriptions::where('subscribable_type', $input['subscribable_type'])
                            ->where('subscribable_id', $input['subscribable_id'])
                            ->with(
                                [
                                    'enablingObjective',
                                    'enablingObjective.achievements'=> function ($query) {
                                        $query->where('user_id', auth()->user()->id);
                                    },
                                ])
                            ->get()
                ];
            }
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
        $new_subscription = $this->validateRequest();

        $model = EnablingObjective::find($new_subscription['enabling_objective_id']);
        abort_unless($model->isAccessible(), 403);

        $subscription = EnablingObjectiveSubscriptions::firstOrCreate([
            'enabling_objective_id' => $new_subscription['enabling_objective_id'],
            'subscribable_type' => $new_subscription['subscribable_type'],
            'subscribable_id' => $new_subscription['subscribable_id'],
            'sharing_level_id' => 1,
            'visibility' => true,
            'owner_id' => auth()->user()->id,
        ]);
        if (request()->wantsJson()) {
            return ['message' => 'ok'];
        }
    }

    public function destroySubscription(Request $request)
    {
        $subscription = $this->validateRequest();

        return EnablingObjectiveSubscriptions::where([
            'enabling_objective_id' => $subscription['enabling_objective_id'],
            'subscribable_type' => $subscription['subscribable_type'],
            'subscribable_id' => $subscription['subscribable_id'],
            'sharing_level_id' => $subscription['sharing_level_id'],
            'visibility' => $subscription['visibility'],
            //"owner_id"=> auth()->user()->id, //Todo: admin should be able to delete everything
        ])->delete();
    }

    protected function validateRequest()
    {
        return request()->validate([
            'enabling_objective_id' => 'sometimes|required',
            'subscribable_type' => 'required',
            'subscribable_id' => 'required',
            'sharing_level_id' => 'sometimes',
            'visibility' => 'sometimes',
        ]);
    }
}
