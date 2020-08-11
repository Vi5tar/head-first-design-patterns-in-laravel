<?php

namespace App\Ch4\AF\Ingredients;

use App\Ch4\AF\Ingredients\Clam;

class FreshClams extends Clam
{
    public function __construct() {
        $this->name = "Fresh Clams";
    }
}