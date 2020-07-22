<?php

namespace App\Ch3_DecoratingObjects;

class DarkRoast extends Beverage
{
    public function __construct() {
        $this->description = 'Dark Roast Coffee';
    }
    
    public function cost()
    {
        return .99;
    }
}