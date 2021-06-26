<?php

namespace PabloSanches\DesignPatterns\Factory;

use PabloSanches\DesignPatterns\Factory\Product;

class ConcreteProduct1 implements Product
{
    public function operation()
    {
        return "{Result of the ConcreteProduct1}";
    }
}
