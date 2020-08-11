<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Cheese;

Class Mozzarella extends Cheese
{
    public function __construct() {
        $this->name = "Mozzarella";
    }
}