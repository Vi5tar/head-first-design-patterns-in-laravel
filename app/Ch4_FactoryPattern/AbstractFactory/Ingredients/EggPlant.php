<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Veggie;

Class EggPlant extends Veggie
{
    public function __construct() {
        $this->name = "Egg Plant";
    }
}