<?php
 
namespace App\Events;
 
use App\Models\Transaction;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
 
class TransactionsUpdated implements ShouldBroadcastNow
{
    use SerializesModels;
    /**
     * The order instance.
     *
     * @var \App\Models\Transaction
     */
    public $transaction;


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\PrivateChannel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('transactions.'.$this->transaction);
    }
}