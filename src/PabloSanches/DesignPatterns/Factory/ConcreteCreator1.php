<?php

namespace PabloSanches\DesignPatterns\Factory;

use PabloSanches\DesignPatterns\Factory\Creator;
use PabloSanches\DesignPatterns\Factory\ConcreteProduct1;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod()
    {
        return new ConcreteProduct1();
    }
}