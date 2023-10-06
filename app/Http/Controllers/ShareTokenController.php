<?php

namespace App\Http\Controllers;

use App\KanbanSubscription;
use App\VideoconferenceSubscription;
use App\OrganizationRoleUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ShareTokenController extends Controller
{
    public function create(Request $request)
    {
        $input = $this->validateRequest();
        $date = $input['date'];
        if (! empty($date)) {
            $date = Carbon::parse($date);
            $date = $date->addDays(1); //fix date bug
        }

        // Create random hash token
        $token = Str::uuid();

        $user = User::find(env('GUEST_USER'));

        switch ($input['model_url'])
        {
            case 'videoconference':
                $subscriptionClass = new VideoconferenceSubscription();
                $field_model_id = 'videoconference_id';
                break;
            case 'kanban':
                $subscriptionClass = new KanbanSubscription();
                $field_model_id = 'kanban_id';
                break;

            default:
            break;
        }

        $subscribe = $subscriptionClass->where(
            [
                $field_model_id => $input['model_id'],
                'subscribable_type' => "App\User",
                'subscribable_id' => $user->id,
            ])->get()->first();

        if (isset($subscribe->sharing_token))
        {
            $token = $subscribe->sharing_token;

            $subscribe = $subscriptionClass->updateOrCreate([
                $field_model_id => $input['model_id'],
                'subscribable_type' => "App\User",
                'subscribable_id' => $user->id,
            ], [
                'due_date' => $date,
                'title' => isset($input['title']) ? $input['title'] : false,
                'editable' => isset($input['editable']) ? $input['editable'] : false,
                'owner_id' => auth()->user()->id,
                'sharing_token' => $token,
            ]);
            $subscribe->save();
        }
        else
        {
            $subscribe =  $subscriptionClass->updateOrCreate([
                $field_model_id => $input['model_id'],
                'subscribable_type' => "App\User",
                'subscribable_id' => $user->id,
                'sharing_token' => $token,
            ], [
                'due_date' => $date,
                'title' => isset($input['title']) ? $input['title'] : false,
                'editable' => isset($input['editable']) ? $input['editable'] : false,
                'owner_id' => auth()->user()->id,
            ]);
            $subscribe->save();
        }
        return response()->json(['url' => '/'.$input['model_url'].'/'.$input['model_id'].'/token?sharing_token='.$token]);
    }

    public function auth($token)
    {
        //only used by old kanban urls
        if (Auth::user() == null) {       //if no user is authenticated authenticate guest
            LogController::set('guestLogin');
            LogController::setStatistics();
            Auth::loginUsingId((env('GUEST_USER')), true);
        }

        $subscription = KanbanSubscription::where('sharing_token',$token)->get()->first();
        if ($subscription->due_date) {
            $now = Carbon::now();
            $due_date = Carbon::parse($subscription->due_date);
            if ($due_date < $now) {
                abort(410, 'Dieser Link ist nicht mehr gültig');
            }
        }

        return redirect('/kanbans/'.$subscription->kanban_id.'/token?sharing_token='.$token);
    }
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'string',
            'date' => 'nullable|date',
            'model_id' => 'integer',
            'editable' => 'sometimes',
            'model_url' => 'sometimes|string',
        ]);
    }
}
