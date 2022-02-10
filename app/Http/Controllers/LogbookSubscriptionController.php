<?php

namespace App\Http\Controllers;

use App\LogbookSubscription;
use App\Logbook;
use Illuminate\Http\Request;

class LogbookSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input = $this->validateRequest();
        if (isset($input['subscribable_type']) AND isset($input['subscribable_id']))
        {
            $subscriptions = LogbookSubscription::where([
                'subscribable_type' => $input['subscribable_type'],
                'subscribable_id'   => $input['subscribable_id']
            ]);

            if (request()->wantsJson()){
                return ['subscriptions' => $subscriptions->with(['logbook'])->get()];
            }
        }
        else
        {
            if (request()->wantsJson()){
                return [
                    'subscribers' =>
                        [
                            'users' => auth()->user()->users()->select('users.id', 'users.firstname', 'users.lastname')->get(),
                            'groups' => auth()->user()->groups()->select('group_id', 'title')->get(),
                            'organizations' => auth()->user()->organizations()->select('organization_id', 'title')->get(),
                            'subscriptions' =>
                                optional(
                                    optional(
                                        Logbook::find(request('logbook_id'))
                                    )->subscriptions()
                                )->with('subscribable')->get()
                        ]
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
        abort_unless(\Gate::allows('logbook_create'), 403);
        $input = $this->validateRequest();
        abort_unless(auth()->user()->id == Logbook::find($input['model_id'])->owner_id, 403);                // user owns logbook_subscription

        $subscribe = LogbookSubscription::updateOrCreate([
            "logbook_id" => $input['model_id'],
            "subscribable_type" => $input['subscribable_type'],
            "subscribable_id" => $input['subscribable_id'],
        ], [
            "editable" => isset($input['editable']) ? $input['editable'] : false,
            "owner_id" => auth()->user()->id,
        ]);
        $subscribe->save();

        if (request()->wantsJson()){
            return ['subscription' => Logbook::find($input['model_id'])->subscriptions()->with('subscribable')->get()];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogbookSubscription  $logbookSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogbookSubscription $logbookSubscription)
    {
        abort_unless(\Gate::allows('logbook_edit'), 403);
        $input = $this->validateRequest();
        abort_unless(auth()->user()->id == $logbookSubscription->owner_id, 403);                // user owns logbook_subscription

        $logbookSubscription->update([
            "editable" => isset($input['editable']) ? $input['editable'] : false,
            "owner_id" => auth()->user()->id,
        ]);

        if (request()->wantsJson()) {
            return ['editable' => $logbookSubscription->editable];
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogbookSubscription  $logbookSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogbookSubscription $logbookSubscription)
    {
        abort_unless(\Gate::allows('logbook_delete'), 403);
        abort_unless(auth()->user()->id == $logbookSubscription->owner_id, 403);                // user owns logbook_subscription
        if (request()->wantsJson()) {
            return ['message' => $logbookSubscription->delete()];
        } else {
            $logbookSubscription->delete();
        }
    }

    protected function validateRequest()
    {
        return request()->validate([
            'subscribable_type' => 'sometimes|string',
            'subscribable_id' => 'sometimes|integer',
            'model_id' => 'sometimes|integer',
            'editable' => 'sometimes',
        ]);
    }
}
