<?php

namespace App\Ch4\FM;

abstract class Pizza
{
    public string $name, $dough, $sauce;
    public array $toppings = [];

    public function prepare() : void
    {
        echo "Preparing $this->name\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings:\n";
        foreach ($this->toppings as $topping) {
            echo "  $topping\n";
        }
    }

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
}