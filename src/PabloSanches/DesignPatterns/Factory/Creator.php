<?php

namespace PabloSanches\DesignPatterns\Factory;

abstract class Creator
{
    abstract public function factoryMethod();

    public function someOperation()
    {
        $product = $this->factoryMethod();
        return "Creator: The same creator's code has just worked with " . $product->operation();
    }
}