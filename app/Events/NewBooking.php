<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewBooking
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $booking;
    public function __construct($b)
    {
        $this->booking = $b;

        $botToken = env('TELEGRAM_BOT_TOKEN');

        $chat_id = $this->booking->barber->telegram_id;

        $barbar_name = ucfirst($this->booking->barber->name) ;

        $message = "Hi {$barbar_name}, \n\n";


        $message .= "New Booking For You 📅 \n\n";

        $message .= "Client Details: \n\n";

        $message .= "Name: {$this->booking->name} \n\n";

        $message .= "Service: {$this->booking->service->name} \n\n";

        $message .= "Phone: {$this->booking->phone} \n\n";

        if($this->booking->message != null || $this->booking->message != ""){

            $message .= "Message: {$this->booking->message} \n\n";
        }


        $message .= "Date: {$this->booking->booking_date} \n\n";

        $message .= "Time: {$this->booking->booking_time} \n";








        // Phone: {$this->booking->phone} \n
        // Message: {$this->booking->message} \n
        // Date: {$this->booking->booking_date} \n
        // Time: {$this->booking->booking_time}
        // ";

        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";


        Http::post($url, [
            'chat_id' => $chat_id,
            'text' => $message,
        ]);

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
