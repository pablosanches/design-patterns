<?php

namespace PabloSanches\DesignPatterns\Adapter;

class Target
{
    public function request()
    {
        return "Target: The default target's behavior.";
    }
}