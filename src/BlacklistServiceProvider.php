<?php

namespace Davaramyan\Blacklist;

use Illuminate\Support\ServiceProvider;

class BlacklistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Davaramyan\Blacklist\BlacklistController');
    }
}
