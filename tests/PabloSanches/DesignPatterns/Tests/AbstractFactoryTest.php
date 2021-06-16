<?php

namespace PabloSanches\DesignPatterns\Tests;

use PabloSanches\DesignPatterns\AbstractFactory\ConcreteFactory1;
use PabloSanches\DesignPatterns\AbstractFactory\ConcreteFactory2;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory1()
    {
        $factory = new ConcreteFactory1();
        $productA = $factory->createProductA();
        $this->assertEquals('The result of the product A1.', $productA->usefulFunctionA());

        $productB = $factory->createProductB();
        $this->assertEquals('The result of the product B1.', $productB->usefulFunctionB());
        $this->assertEquals('The result of the B1 collaborating with the (The result of the product A1.)', $productB->anotherUsefulFunctionB($productA));
    }

    public function testFactory2()
    {
        $factory = new ConcreteFactory2();
        $productA = $factory->createProductA();
        $this->assertEquals('The result of the product A2.', $productA->usefulFunctionA());

        $productB = $factory->createProductB();
        $this->assertEquals('The result of the product B2.', $productB->usefulFunctionB());
        $this->assertEquals('The result of the B2 collaborating with the (The result of the product A2.)', $productB->anotherUsefulFunctionB($productA));
    }
}