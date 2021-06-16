<?php

namespace PabloSanches\DesignPatterns\AbstractFactory;

use PabloSanches\DesignPatterns\AbstractFactory\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA()
    {
        return "The result of the product A1.";
    }
}