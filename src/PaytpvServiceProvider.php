<?php

namespace Core45\Paytpv;

use Illuminate\Support\ServiceProvider;

class PaytpvServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //require __DIR__ . '/Http/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-paytpv', function() {
            return new Paytpv;
        });
    }
}
