<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Log;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

    // реєстрація класу події і обробника події
    protected $listen = [
        'App\Events\onAddArticleEvent' => [
            'App\Listeners\AddArticleListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        // реєстрація обробника події
        $events->listen('onAddArticleEvent', function ($article, $user){
            Log::info('Article save:', [$user->name => $article->name]);
        });
    }
}
