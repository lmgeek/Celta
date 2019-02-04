<?php

namespace Formaldehid\Laravel\Theme\Inspinia\DataTables;

use Yajra\DataTables\DataTablesServiceProvider as YaraDataTablesServiceProvider;

class ServiceProvider extends YaraDataTablesServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->alias('datatables', DataTables::class);
        $this->app->singleton('datatables', function () {
            return new DataTables;
        });
    }
}