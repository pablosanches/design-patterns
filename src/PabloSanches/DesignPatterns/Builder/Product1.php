<?php

namespace PabloSanches\DesignPatterns\Builder;

class Product1
{
    public $parts = [];

    public function listParts()
    {
        return "Product parts: " . implode(', ', $this->parts);
    }
}