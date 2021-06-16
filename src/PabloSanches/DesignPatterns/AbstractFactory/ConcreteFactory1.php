<?php

namespace PabloSanches\DesignPatterns\AbstractFactory;

use PabloSanches\DesignPatterns\AbstractFactory\AbstractFactory;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteProductA1;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA()
    {
        return new ConcreteProductA1();
    }
    
    public function createProductB()
    {
        return new ConcreteProductB1();
    }
}