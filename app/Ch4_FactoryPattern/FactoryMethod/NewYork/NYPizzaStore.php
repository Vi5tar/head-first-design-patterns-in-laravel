<?php

namespace App\Ch4\FM\NewYork;

use App\Ch4\FM\Pizza;
use App\Ch4\FM\PizzaStore;
use App\Ch4\FM\NewYork\Pizzas\NYStyleClamPizza;
use App\Ch4\FM\NewYork\Pizzas\NYStyleCheesePizza;
use App\Ch4\FM\NewYork\Pizzas\NYStyleVeggiePizza;
use App\Ch4\FM\NewYork\Pizzas\NYStylePepperoniPizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        if ($type === 'cheese') {
            return new NYStyleCheesePizza();
        } else if ($type === 'veggie') {
            return new NYStyleVeggiePizza();
        } else if ($type === 'clam') {
            return new NYStyleClamPizza();
        } else if ($type === 'pepperoni') {
            return new NYStylePepperoniPizza();
        } else {
            return null;
        }
    }
}
