<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Clam;

class FrozenClams extends Clam
{
    public function __construct() {
        $this->name = "Frozen Clams";
    }
}