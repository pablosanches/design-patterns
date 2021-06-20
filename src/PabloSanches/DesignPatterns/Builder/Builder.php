<?php

namespace PabloSanches\DesignPatterns\Builder;

interface Builder
{
    public function producePartA();

    public function producePartB();

    public function producePartC();
}