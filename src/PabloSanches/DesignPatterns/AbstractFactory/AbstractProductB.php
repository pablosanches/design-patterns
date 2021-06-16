<?php

namespace PabloSanches\DesignPatterns\AbstractFactory;

use PabloSanches\DesignPatterns\AbstractFactory\AbstractProductA;

interface AbstractProductB
{
    public function usefulFunctionB();

    public function anotherUsefulFunctionB(AbstractProductA $collaborator);
}