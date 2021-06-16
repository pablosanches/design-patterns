<?php

namespace PabloSanches\DesignPatterns\AbstractFactory;

use PabloSanches\DesignPatterns\AbstractFactory\AbstractProductB;
use PabloSanches\DesignPatterns\AbstractFactory\AbstractProductA;

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB()
    {
        return "The result of the product B2.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator)
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}