<?php

namespace Formaldehid\Laravel\Theme\Inspinia\Panel;

class Tool
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
}