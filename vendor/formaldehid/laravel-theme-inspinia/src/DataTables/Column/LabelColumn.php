<?php
namespace Formaldehid\Laravel\Theme\Inspinia\DataTables\Column;

use Yajra\DataTables\Html\Column;

class LabelColumn extends Column
{
    /**
     * LabelColumn constructor.
     *
     * @param array $attributes
     * @param array $labels
     */
    public function __construct(array $attributes = [], array $labels = [])
    {
        if(!isset($attributes["render"])){
            $attributes["render"] = 'IN.DataTable.labelRenderer(data, '.json_encode($labels).')';
        }

        parent::__construct($attributes);
    }
}