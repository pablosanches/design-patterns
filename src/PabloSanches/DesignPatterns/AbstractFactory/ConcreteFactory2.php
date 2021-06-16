<?php

namespace PabloSanches\DesignPatterns\AbstractFactory;

use PabloSanches\DesignPatterns\AbstractFactory\AbstractFactory;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteProductA2;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA()
    {
        return new ConcreteProductA2();
    }
    
    public function createProductB()
    {
        return new ConcreteProductB2();
    }
}