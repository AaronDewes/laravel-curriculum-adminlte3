<?php

namespace App\Events;

use App\KanbanItem;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class KanbanItemAddedEvent implements  ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private KanbanItem $kanbanItem;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(KanbanItem $kanbanItem)
    {
        $this->kanbanItem = $kanbanItem;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('Presence.App.Kanban.' . $this->kanbanItem->kanban_id);
    }

    public function broadcastAs(){
        return 'kanbanItemAdded';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastWith(){

        return [
            'user' => auth()->user()->only(['id', 'firstname', 'lastname']),
            'message' =>  KanbanItem::where('id', $this->kanbanItem->id)
                ->with(['mediaSubscriptions', 'media', 'owner', /*'taskSubscription',*/ 'comments'])
                ->get()->first()
        ];
    }
}
