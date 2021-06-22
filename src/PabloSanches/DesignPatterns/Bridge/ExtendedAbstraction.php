<?php

namespace PabloSanches\DesignPatterns\Bridge;

use PabloSanches\DesignPatterns\Bridge\Abstraction;

class ExtendedAbstraction extends Abstraction
{
    public function operation()
    {
        return "ExtendedAbstraction: Extended operation with:" . $this->implementation->operationImplementation();
    }
}