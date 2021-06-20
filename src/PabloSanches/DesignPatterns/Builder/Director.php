<?php

namespace PabloSanches\DesignPatterns\Builder;

use PabloSanches\DesignPatterns\Builder\Builder;

class Director
{
    private $builder;

    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct()
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct()
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}