<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Veggie;

Class RedPepper extends Veggie
{
    public function __construct() {
        $this->name = "Red Pepper";
    }
}