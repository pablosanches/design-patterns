<?php

namespace PabloSanches\DesignPatterns\Bridge;

use PabloSanches\DesignPatterns\Bridge\Implementation;

class ConcreteImplementationB implements Implementation
{
    public function operationImplementation()
    {
        return "ConcreteImplementationA: Here's the result on the platform B.";
    }
}