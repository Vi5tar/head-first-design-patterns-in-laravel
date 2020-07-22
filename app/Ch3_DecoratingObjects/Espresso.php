<?php

namespace App\Ch3_DecoratingObjects;

class Espresso extends Beverage
{
    public function __construct($size = null) {
        $this->description = 'Espresso';
        $this->size = $size ? $size : $this->size;
    }
    
    public function cost()
    {
        return 1.99;
    }
}