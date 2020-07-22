<?php

namespace App\Ch3_DecoratingObjects;

abstract class CondimentDecorator extends Beverage
{
    public function getDescription()
    {
        throw new Exception("getDescription must be overridden");
    }
}