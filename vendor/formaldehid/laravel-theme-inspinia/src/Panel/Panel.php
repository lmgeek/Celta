<?php

namespace Formaldehid\Laravel\Theme\Inspinia\Panel;

use Formaldehid\Laravel\Theme\Inspinia\Panel\Tool\AbstractTool;
use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\View;

class Panel
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $title;

    /** @var AbstractTool[] */
    protected $tools = [];

    /** @var View|string */
    protected $content;

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param AbstractTool $tool
     */
    public function addTool(AbstractTool $tool)
    {
        $this->tools[] = $tool;
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
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getView()
    {
        $factory = Container::getInstance()->make(ViewFactory::class);

        return $factory->make("theme-inspinia::components/panel", [
            "id" => $this->id,
            "title" => $this->title,
            "tools" => $this->tools,
            "content" => $this->content
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