<?php

namespace PabloSanches\DesignPatterns\Bridge;

use PabloSanches\DesignPatterns\Bridge\Implementation;

class ConcreteImplementationA implements Implementation
{
    public function operationImplementation()
    {
        return "ConcreteImplementationA: Here's the result on the platform A.";
    }
}