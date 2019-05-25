<?php

namespace GlennTenorio\LaravelIlovepdf;

use Illuminate\Support\ServiceProvider;

class LaravelIlovepdfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/../config/ilovepdf.php',
            'ilovepdf'
        );

        $this->app->bind('ilovepdf', function ($app) {
            $config = $this->app->make('config')->get('ilovepdf');
            return new Ilovepdf($config['project_key'], $config['secret_key']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/../config/ilovepdf.php' => config_path('ilovepdf.php'),
        ], 'config');
    }
}
