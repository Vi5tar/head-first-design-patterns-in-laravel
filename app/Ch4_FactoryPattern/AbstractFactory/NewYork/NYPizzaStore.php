<?php

namespace App\Ch4\AF\NewYork;

use App\Ch4\AF\Pizza;
use App\Ch4\AF\PizzaStore;
use App\Ch4\AF\Pizzas\ClamPizza;
use App\Ch4\AF\Pizzas\CheesePizza;
use App\Ch4\AF\Pizzas\VeggiePizza;
use App\Ch4\AF\Pizzas\PepperoniPizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("New York Style Cheese Pizza");
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("New York Style Veggie Pizza");
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("New York Style Clam Pizza");
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("New York Style Pepperoni Pizza");
        }

        return $pizza;
    }
}
