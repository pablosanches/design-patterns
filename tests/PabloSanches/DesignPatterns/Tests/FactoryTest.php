<?php

namespace PabloSanches\DesignPatterns\Tests;

use PabloSanches\DesignPatterns\Factory\ConcreteCreator1;
use PabloSanches\DesignPatterns\Factory\ConcreteCreator2;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreator1()
    {
        $operation = new ConcreteCreator1();
        $this->assertEquals(
            "Creator: The same creator's code has just worked with {Result of the ConcreteProduct1}", 
            $operation->someOperation()
        );
    }

    public function testCreator2()
    {
        $operation = new ConcreteCreator2();
        $this->assertEquals(
            "Creator: The same creator's code has just worked with {Result of the ConcreteProduct2}", 
            $operation->someOperation()
        );
    }
}