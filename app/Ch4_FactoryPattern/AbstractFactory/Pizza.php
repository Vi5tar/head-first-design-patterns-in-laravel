<?php

namespace App\Ch4\AF;

use App\Ch4\AF\Ingredients\Cheese;
use App\Ch4\AF\Ingredients\Clam;
use App\Ch4\AF\Ingredients\Dough;
use App\Ch4\AF\Ingredients\Pepperoni;
use App\Ch4\AF\Ingredients\Sauce;

abstract class Pizza
{
    public string $name;
    public Dough $dough;
    public Sauce $sauce;
    public array $veggies = [];
    public Cheese $cheese;
    public Pepperoni $pepperoni;
    public Clam $clam;

    public abstract function prepare() : void;

    public function bake() : void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut() : void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box() : void
    {
        echo "Place pizza in officail PizzaStore box\n";
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}