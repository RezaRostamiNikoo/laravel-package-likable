<?php

namespace Rostami\Likable;

use Illuminate\Support\ServiceProvider;

/**
 * Laravel Likeable Package by Reza RostamiNikoo <RezaRostamiNikoo@gmail.com>.
 */
class LikeableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->publishes([
            realpath(__DIR__.'/../migrations') => database_path('migrations')
        ], 'migrations');
    }

    public function register() {}
}
