<?php
namespace Formaldehid\Laravel\Theme\Inspinia\JsValidation;

use Proengsoft\JsValidation\JsValidationServiceProvider;

class ServiceProvider extends JsValidationServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('jsvalidator', function ($app) {
            $config = $app['config']->get('jsvalidation');

            return new JsValidatorFactory($app, $config);
        });
    }
}