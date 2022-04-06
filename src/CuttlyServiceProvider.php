<?php

namespace Parsadanashvili\LaravelCuttly;

use Illuminate\Support\ServiceProvider;

class CuttlyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cuttly.php' => config_path('cuttly.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config/cuttly.php', 'cuttly');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Cuttly::class);
    }
}