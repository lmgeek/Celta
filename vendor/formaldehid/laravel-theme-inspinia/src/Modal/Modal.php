<?php

namespace Formaldehid\Laravel\Theme\Inspinia\Modal;

use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\View;

class Modal
{
    CONST SIZE_CLASS_SMALL = "modal-sm";
    CONST SIZE_CLASS_LARGE = "modal-lg";
    CONST SIZE_CLASS_EXTRA_LARGE = "modal-xlg";

    /** @var string */
    protected $id;

    /** @var View|string */
    protected $content;

    /** @var string */
    protected $sizeClass;

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param View $view
     */
    public function setContentView(View $view)
    {
        $this->content = $view;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * @param string $sizeClass
     */
    public function setSizeClass(string $sizeClass )
    {
        $this->sizeClass = $sizeClass;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        $factory = Container::getInstance()->make(ViewFactory::class);

        return $factory->make("theme-inspinia::components/modal", [
            "id" => $this->id,
            "content" => $this->content,
            "sizeClass" => $this->sizeClass
        ]);
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function render()
    {
        return $this->getView()->render();
    }
}