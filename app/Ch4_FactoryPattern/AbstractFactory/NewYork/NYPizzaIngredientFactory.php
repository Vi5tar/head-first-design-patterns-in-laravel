<?php

namespace App\Ch4\AF\NewYork;

use App\Ch4\AF\Ingredients\Clam;
use App\Ch4\AF\Ingredients\Dough;
use App\Ch4\AF\Ingredients\Sauce;
use App\Ch4\AF\Ingredients\Onion;
use App\Ch4\AF\Ingredients\Cheese;
use App\Ch4\AF\Ingredients\Garlic;
use App\Ch4\AF\Ingredients\Mushroom;
use App\Ch4\AF\Ingredients\Pepperoni;
use App\Ch4\AF\Ingredients\RedPepper;
use App\Ch4\AF\Ingredients\FreshClams;
use App\Ch4\AF\Ingredients\MarinaraSauce;
use App\Ch4\AF\Ingredients\ReggianoCheese;
use App\Ch4\AF\Ingredients\ThinCrustDough;
use App\Ch4\AF\Ingredients\SlicedPepperoni;
use App\Ch4\AF\Interfaces\PizzaIngredientFactory;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FreshClams();
    }
}