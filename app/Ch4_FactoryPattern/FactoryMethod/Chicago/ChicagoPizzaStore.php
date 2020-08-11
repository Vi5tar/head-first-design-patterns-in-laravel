<?php

namespace App\Ch4\FM\Chicago;

use App\Ch4\FM\Pizza;
use App\Ch4\FM\PizzaStore;
use App\Ch4\FM\Chicago\Pizzas\ChicagoStyleClamPizza;
use App\Ch4\FM\Chicago\Pizzas\ChicagoStyleCheesePizza;
use App\Ch4\FM\Chicago\Pizzas\ChicagoStyleVeggiePizza;
use App\Ch4\FM\Chicago\Pizzas\ChicagoStylePepperoniPizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        if ($type === 'cheese') {
            return new ChicagoStyleCheesePizza();
        } else if ($type === 'veggie') {
            return new ChicagoStyleVeggiePizza();
        } else if ($type === 'clam') {
            return new ChicagoStyleClamPizza();
        } else if ($type === 'pepperoni') {
            return new ChicagoStylePepperoniPizza();
        } else {
            return null;
        }
    }
}
