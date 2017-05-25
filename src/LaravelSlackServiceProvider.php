<?php

/*
 * This file is part of the Laravel Slack package.
 *
 * (c) Gooodness Toluwanimi Kayode <gtkbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GoodnessKay\LaravelSlack;

use Illuminate\Support\ServiceProvider;

class LaravelSlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/LaravelSlack.php' => config_path('LaravelSlack.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/views/slack' => resource_path('views/slack'),
        ]);

        $this->publishes([
            __DIR__.'/views/slack/slack-asset' => public_path('/slack-asset'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->loadViewsFrom(__DIR__.'/views/slack','slack');
        $this->mergeConfigFrom( __DIR__.'/config/LaravelSlack.php', 'LaravelSlack');
        $this->app->singleton(LaravelSlack::class, function ($app) {
            return new LaravelSlack(config('laravelslack'));
        });
    }
}
