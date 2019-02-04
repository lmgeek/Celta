<?php
namespace Formaldehid\Laravel\Theme\Inspinia\DataTables;

use Yajra\DataTables\DataTables as YaraDataTables;

class DataTables extends YaraDataTables
{
    /**
     * Get html builder instance.
     *
     * @return HtmlBuilder
     * @throws \Exception
     */
    public function getHtmlBuilder()
    {
        if (! class_exists('\Yajra\DataTables\Html\Builder')) {
            throw new \Exception('Please install yajra/laravel-datatables-html to be able to use this function.');
        }

        return $this->html ?: $this->html = app('datatables.html');
    }
}