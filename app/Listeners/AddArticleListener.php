<?php

namespace App\Listeners;

use App\Events\onAddArticleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class AddArticleListener
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
     * @param  onAddArticleEvent  $event
     * @return void
     */

    // обробник події
    // обробляє певну подію, з якою зв'язується
    public function handle(onAddArticleEvent $event)
    {
//        $event->user_name;
//        $event->article_name;
        Log::info('Article save in database', [$event->user_name => $event->article_name]);
    }
}
