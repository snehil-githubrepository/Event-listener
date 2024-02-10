<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class NotifyUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        //logs gets stored in storage/logs for post creation
        Log::info('New post created: ' . $event->post->title);
    }
}
