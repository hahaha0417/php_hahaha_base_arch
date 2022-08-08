<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Events\PostCreated::class => [
            \App\Listeners\NotifyUser::class,
            // 放兩個都會執行
            \App\Listeners\NotifyUser1::class,
        ],
    ];

    /**
     * 被注册的订阅者类
     *
     * @var array
     *
     * https://laravel.tw/docs/5.2/artisan
     * 有要在試
     *
     */
    // protected $subscribe = [
    //     UserEventSubscriber::class,
    // ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
