<?php

namespace App\Ch4\AF\Chicago;

use App\Ch4\AF\Pizza;
use App\Ch4\AF\PizzaStore;
use App\Ch4\AF\Pizzas\ClamPizza;
use App\Ch4\AF\Pizzas\CheesePizza;
use App\Ch4\AF\Pizzas\VeggiePizza;
use App\Ch4\AF\Pizzas\PepperoniPizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("Chicago Style Cheese Pizza");
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("Chicago Style Veggie Pizza");
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("Chicago Style Clam Pizza");
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("Chicago Style Pepperoni Pizza");
        }

        return $pizza;
    }
}
