<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Veggie;

Class Garlic extends Veggie
{
    public function __construct() {
        $this->name = "Garlic";
    }
}