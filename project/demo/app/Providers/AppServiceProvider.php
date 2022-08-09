<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PodcastParser;
use App\Contracts\EventPusher;
use App\Services\RedisEventPusher;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Services\Transistor;
use Illuminate\Support\Facades\App;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        // https://learnku.com/docs/laravel/9.x/providers/12207 *


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Collection::macro('toUpper', function () {
        //     return $this->map(function ($value) {
        //         return Str::upper($value);
        //     });
        // });

        //
        // $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        //     return strtoupper($name);
        // })->reject(function ($name) {
        //     return empty($name);
        // });
        // $rrr = 0;
        // 您通常会与服务提供商内部的容器进行交互
        // $this->app->bind(Transistor::class, function ($app) {
        //     return new Transistor($app->make(PodcastParser::class));
        // });


        // 如果您希望与服务提供商外部的容器进行交互
        // App::bind(Transistor::class, function ($app) {
        //     // ...
        //     return new \stdClass;
        // });
        // $rrr = app(Transistor::class);

        // // 单例的绑定
        // $this->app->singleton(Transistor::class, function ($app) {
        //     return new Transistor($app->make(PodcastParser::class));
        // });


        // ----------------------------------------------------------------
        // $this->app->bind(EventPusher::class, RedisEventPusher::class);

        // /**
        //  * 创建一个新的实例
        //  *
        //  * @param  \App\Contracts\EventPusher  $pusher
        //  * @return void
        //  */
        // public function __construct(EventPusher $pusher)
        // {
        //     $this->pusher = $pusher;
        // }
        // ----------------------------------------------------------------
    }
}
