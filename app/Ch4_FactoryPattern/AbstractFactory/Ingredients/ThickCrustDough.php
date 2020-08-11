<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Dough;

Class ThickCrustDough extends Dough
{
    public function __construct() {
        $this->name = "Thick Crust Dough";
    }
}