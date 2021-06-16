<?php

namespace PabloSanches\DesignPatterns\Adapter;

use PabloSanches\DesignPatterns\Adapter\Target;
use PabloSanches\DesignPatterns\Adapter\Adaptee;

class Adapter extends Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}