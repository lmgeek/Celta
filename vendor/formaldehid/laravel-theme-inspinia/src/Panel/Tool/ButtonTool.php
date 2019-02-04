<?php

namespace Formaldehid\Laravel\Theme\Inspinia\Panel\Tool;



use Illuminate\Support\Str;

class ButtonTool extends AbstractTool
{
    /** @var string  */
    protected $name;

    /** @var string  */
    protected $title;

    /** @var null  */
    protected $class;

    CONST CLASS_DEFAULT = "btn-default";
    CONST CLASS_PRIMARY = "btn-primary";
    CONST CLASS_SUCCESS = "btn-success";
    CONST CLASS_INFO = "btn-info";
    CONST CLASS_WARNING = "btn-warning";
    CONST CLASS_DANGER = "btn-danger";
    CONST CLASS_LINK = "btn-link";

    /**
     * ButtonTool constructor.
     *
     * @param string $title
     * @param string|null $name
     * @param string|null $class
     */
    public function __construct(string $title, $name = null, $class = null)
    {
        parent::__construct("button");

        $this->title = $title;
        $this->name = $name ? $name : Str::snake($title);
        $this->class = $class;
    }
}