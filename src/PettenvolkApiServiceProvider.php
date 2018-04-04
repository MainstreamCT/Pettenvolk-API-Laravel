<?php

namespace mainstreamct\pettenvolk-api;

use Illuminate\Support\ServiceProvider;

class PettenvolkApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'mainstreamct\pettenvolk-api\pettenvolk-conf.php' => config_path('pettenvolk.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('mainstreamct\pettenvolk-api\PettenvolkApiController');
    }
}
