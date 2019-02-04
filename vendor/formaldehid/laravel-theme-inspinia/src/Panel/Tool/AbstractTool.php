<?php

namespace Formaldehid\Laravel\Theme\Inspinia\Panel\Tool;

abstract class AbstractTool
{
    /** @var string  */
    protected $type;

    /**
     * Tool constructor.
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $property
     * @return null|string
     */
    public function getProperty($property)
    {
        if(property_exists($this, $property)){
            return $this->{$property};
        }

        return null;
    }
}