<?php

namespace Formaldehid\Laravel\Theme\Inspinia\DataTables;

use Yajra\DataTables\HtmlServiceProvider as YaraHtmlServiceProvider;

class HtmlServiceProvider extends YaraHtmlServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->bind('datatables.html', function () {
            return $this->app->make(HtmlBuilder::class);
        });
    }
}