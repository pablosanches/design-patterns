<?php

namespace PabloSanches\DesignPatterns\Factory;

use PabloSanches\DesignPatterns\Factory\Product;

class ConcreteProduct2 implements Product
{
    public function operation()
    {
        return "{Result of the ConcreteProduct2}";
    }
}
