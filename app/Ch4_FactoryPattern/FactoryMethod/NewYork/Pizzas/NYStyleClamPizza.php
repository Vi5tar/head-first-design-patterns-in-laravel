<?php

namespace App\Ch4\FM\NewYork\Pizzas;

use App\Ch4\FM\Pizza;

class NYStyleClamPizza extends Pizza
{
    public function __construct() {
        $this->name = 'NY Style Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = [
            'Grated Reggiano Cheese',
            'Clams',
        ];
    }
}