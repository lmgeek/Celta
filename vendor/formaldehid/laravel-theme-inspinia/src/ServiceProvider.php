<?php
namespace Formaldehid\Laravel\Theme\Inspinia;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'theme-inspinia');

        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/theme-inspinia'),
        ], "views");
    }
}