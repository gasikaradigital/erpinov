<?php

namespace App\Listeners;

use App\Events\InstanceCreated;
use Illuminate\Support\Facades\Mail;

class SendInstanceCreationEmail
{
    public function handle(InstanceCreated $event)
    {
        $user = $event->instance->user;
        $instance = $event->instance;

        Mail::send('emails.instance_created', ['user' => $user, 'instance' => $instance], function ($message) use ($user) {
            $message->to($user->email)->subject('Votre instance Dolibarr est prête !');
        });
    }
}