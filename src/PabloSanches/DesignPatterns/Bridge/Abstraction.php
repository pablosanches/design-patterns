<?php

namespace PabloSanches\DesignPatterns\Bridge;

use PabloSanches\DesignPatterns\Bridge\Implementation;

class Abstraction
{
    /**
     * @var Implementation
     */
    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation()
    {
        return "Abstraction: Base operation with:" . $this->implementation->operationImplementation();
    }
}