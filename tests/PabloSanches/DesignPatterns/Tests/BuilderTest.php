<?php

namespace PabloSanches\DesignPatterns\Tests;

use PabloSanches\DesignPatterns\Builder\ConcreteBuilder1;
use PabloSanches\DesignPatterns\Builder\Director;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicProduct()
    {
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $director->buildMinimalViableProduct();
        $parts = $builder
            ->getProduct()
            ->listParts();

        $this->assertEquals('Product parts: PartA1', $parts);
    }

    public function testFullProduct()
    {
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $director->buildFullFeaturedProduct();
        $parts = $builder
            ->getProduct()
            ->listParts();

        $this->assertEquals('Product parts: PartA1, PartB1, PartC1', $parts);
    }

    public function testCustomProduct()
    {
        $director = new Director();
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        $builder->producePartA();
        $builder->producePartC();

        $parts = $builder
            ->getProduct()
            ->listParts();

        $this->assertEquals('Product parts: PartA1, PartC1', $parts);
    }
}