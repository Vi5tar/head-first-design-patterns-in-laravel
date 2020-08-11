<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Dough;

Class ThinCrustDough extends Dough
{
    public function __construct() {
        $this->name = "Thin Crust Dough";
    }
}