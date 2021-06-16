<?php

namespace PabloSanches\DesignPatterns\Tests;

use PabloSanches\DesignPatterns\Adapter\Target;
use PabloSanches\DesignPatterns\Adapter\Adaptee;
use PabloSanches\DesignPatterns\Adapter\Adapter;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testTarget()
    {
        $target = new Target();
        $this->assertEquals("Target: The default target's behavior.", $target->request());
    }

    public function testAdaptee()
    {
        $adaptee = new Adaptee();
        $this->assertEquals(".eetpadA eht fo roivaheb laicepS", $adaptee->specificRequest());
    }

    public function testAdapter()
    {
        $adaptee = new Adaptee();
        $adapter = new Adapter($adaptee);
        $this->assertEquals("Adapter: (TRANSLATED) Special behavior of the Adaptee.", $adapter->request());
    }
}