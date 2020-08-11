<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Veggie;

Class Mushroom extends Veggie
{
    public function __construct() {
        $this->name = "Mushroom";
    }
}