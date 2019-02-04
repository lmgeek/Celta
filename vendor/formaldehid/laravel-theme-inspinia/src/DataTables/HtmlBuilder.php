<?php
namespace Formaldehid\Laravel\Theme\Inspinia\DataTables;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\HtmlString;
use Yajra\DataTables\Html\Builder;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends Builder
{
    public function __construct(Repository $config, Factory $view, CollectiveHtmlBuilder $html)
    {
        parent::__construct($config, $view, $html);

        $this->addTableClass("table table-striped table-bordered table-hover");
        $this->parameters([
            "pageLength" => 25,
            "responsive" => true,
            "dom" => '<"html5buttons"B>lTfgitp',
            "buttons" => [
                ["extend" => "copy"],
                ["extend" => "csv"],
                ["extend" => "excel", "title" => "ExcelFile"],
                ["extend" => "pdf", "title" => "PdfFile"],
                ["extend" => "print"]
            ],
            "order" => [[0, "desc"]]

            /*
            "buttons": [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},
                {extend: 'print',
                    customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');
                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
                }
            ]
            */
        ]);
    }

    /**
     * @param array $order
     */
    public function setOrder(array $order)
    {
        $this->parameters(["order" => $order]);
    }

    /**
     * Generate DataTable's table html.
     *
     * @param array $attributes
     * @param bool  $drawFooter
     * @param bool  $drawSearch
     * @return \Illuminate\Support\HtmlString
     */
    public function table(array $attributes = [], $drawFooter = false, $drawSearch = false)
    {
        $this->setTableAttributes($attributes);

        $th       = $this->compileTableHeaders();
        $htmlAttr = $this->html->attributes($this->tableAttributes);

        $tableHtml  = '<div class="table-responsive"><table ' . $htmlAttr . '>';
        $searchHtml = $drawSearch ? '<tr class="search-filter">' . implode('',
                $this->compileTableSearchHeaders()) . '</tr>' : '';
        $tableHtml  .= '<thead><tr>' . implode('', $th) . '</tr>' . $searchHtml . '</thead>';
        if ($drawFooter) {
            $tf        = $this->compileTableFooter();
            $tableHtml .= '<tfoot><tr>' . implode('', $tf) . '</tr></tfoot>';
        }
        $tableHtml .= '</table></div>';

        return new HtmlString($tableHtml);
    }

    /**
     * Compile table headers and to support responsive extension.
     *
     * @return array
     */
    private function compileTableHeaders()
    {
        $th = [];
        foreach ($this->collection->toArray() as $row) {
            $thAttr = $this->html->attributes(array_merge(
                array_only($row, ['class', 'id', 'width', 'style', 'data-class', 'data-hide']),
                $row['attributes']
            ));
            $th[]   = '<th ' . $thAttr . '>' . $row['title'] . '</th>';
        }

        return $th;
    }

    /**
     * Compile table search headers.
     *
     * @return array
     */
    private function compileTableSearchHeaders()
    {
        $search = [];
        foreach ($this->collection->all() as $key => $row) {
            $search[] = $row['searchable'] ? '<th>' . (isset($row->search) ? $row->search : '') . '</th>' : '<th></th>';
        }

        return $search;
    }

    /**
     * Compile table footer contents.
     *
     * @return array
     */
    private function compileTableFooter()
    {
        $footer = [];
        foreach ($this->collection->all() as $row) {
            if (is_array($row->footer)) {
                $footerAttr = $this->html->attributes(array_only($row->footer,
                    ['class', 'id', 'width', 'style', 'data-class', 'data-hide']));
                $title      = isset($row->footer['title']) ? $row->footer['title'] : '';
                $footer[]   = '<th ' . $footerAttr . '>' . $title . '</th>';
            } else {
                $footer[] = '<th>' . $row->footer . '</th>';
            }
        }

        return $footer;
    }
}