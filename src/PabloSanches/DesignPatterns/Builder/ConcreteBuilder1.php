<?php

namespace PabloSanches\DesignPatterns\Builder;

use PabloSanches\DesignPatterns\Builder\Builder;
use PabloSanches\DesignPatterns\Builder\Product1;

class ConcreteBuilder1 implements Builder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->product = new Product1();
    }

    public function getProduct()
    {
        $result = $this->product;
        $this->reset();
        
        return $result;
    }

    public function producePartA()
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB()
    {
        $this->product->parts[] = "PartB1";
    }

    public function producePartC()
    {
        $this->product->parts[] = "PartC1";
    }
}