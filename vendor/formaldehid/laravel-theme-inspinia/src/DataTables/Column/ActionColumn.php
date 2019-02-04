<?php
namespace Formaldehid\Laravel\Theme\Inspinia\DataTables\Column;

use Yajra\DataTables\Html\Column;

class ActionColumn extends Column
{
    /**
     * ActionColumn constructor.
     *
     * @param array $attributes
     * @param array $actions
     */
    public function __construct(array $attributes = [], array $actions = [])
    {
        if(!isset($attributes["render"])){
            $attributes["render"] = 'IN.DataTable.actionRenderer('.json_encode($actions).')';
        }

        parent::__construct($attributes);
    }
}