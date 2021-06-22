<?php

namespace PabloSanches\DesignPatterns\Tests;

use PabloSanches\DesignPatterns\Bridge\Abstraction;
use PabloSanches\DesignPatterns\Bridge\ConcreteImplementationA;
use PabloSanches\DesignPatterns\Bridge\ConcreteImplementationB;
use PabloSanches\DesignPatterns\Bridge\ExtendedAbstraction;


class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementationA()
    {
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);

        $this->assertEquals(
            "Abstraction: Base operation with:ConcreteImplementationA: Here's the result on the platform A.",
            $abstraction->operation()
        );
    }

    public function testImplementationB()
    {
        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);

        $this->assertEquals(
            "ExtendedAbstraction: Extended operation with:ConcreteImplementationA: Here's the result on the platform B.",
            $abstraction->operation()
        );
    }
}