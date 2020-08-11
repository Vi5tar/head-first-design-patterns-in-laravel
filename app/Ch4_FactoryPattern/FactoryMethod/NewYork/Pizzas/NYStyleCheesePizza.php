<?php

namespace App\Ch4\FM\NewYork\Pizzas;

use App\Ch4\FM\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function __construct() {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = [
            'Grated Reggiano Cheese',
        ];
    }
}