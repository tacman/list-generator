<?php

namespace Umpirsky\ListGenerator\Importer;

abstract class Importer implements ImporterInterface
{
    /**
     * Gets source name.
     *
     * @return string
     */
    public function getSource(): string
    {
        return strtolower(get_class($this));
    }
}
