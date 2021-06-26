<?php

namespace PabloSanches\DesignPatterns\Factory;

use PabloSanches\DesignPatterns\Factory\Creator;
use PabloSanches\DesignPatterns\Factory\ConcreteProduct2;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProduct2();
    }
}