<?php

namespace App\Ch4\FM\Chicago\Pizzas;

use App\Ch4\FM\Pizza;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct() {
        $this->name = 'Chicago Style Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = [
            'Shredded Mozzarella Cheese',
            'Clam',
        ];
    }
}