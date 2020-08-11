<?php

namespace App\Ch4\AF;

use App\Ch4\AF\Pizza;

abstract class PizzaStore 
{
    public function orderPizza(String $type) : Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        
        return $pizza;
    }

    abstract function createPizza(String $type) : Pizza;
}