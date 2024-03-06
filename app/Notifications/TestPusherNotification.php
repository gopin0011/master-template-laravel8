<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class TestPusherNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $user_id;
    public $msg;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_id, $msg)
    {
        $this->user_id = $user_id;
        $this->msg = $msg;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user_id'=>$this->user_id,
            'comment'=>$this->msg,
        ];
    }

    public function toBroadcast($notifiable): BroadcastMessage
    {

        return new BroadcastMessage([
            'user_id'=>$this->user_id,
            'comment'=>$this->msg,
        ]);
    }

    public function toDatabase($notifiable)
    {
        return $this->toArray($notifiable);
    }
}
