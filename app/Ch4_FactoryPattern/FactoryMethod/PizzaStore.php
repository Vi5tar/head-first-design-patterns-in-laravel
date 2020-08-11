<?php

namespace App\Ch4\FM;

use App\Ch4\FM\Pizza;

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