<?php

namespace App\Ch4\AF\Chicago;

use App\Ch4\AF\Ingredients\Clam;
use App\Ch4\AF\Ingredients\Dough;
use App\Ch4\AF\Ingredients\Sauce;
use App\Ch4\AF\Ingredients\Cheese;
use App\Ch4\AF\Ingredients\Spinach;
use App\Ch4\AF\Ingredients\EggPlant;
use App\Ch4\AF\Ingredients\Pepperoni;
use App\Ch4\AF\Ingredients\Mozzarella;
use App\Ch4\AF\Ingredients\BlackOlives;
use App\Ch4\AF\Ingredients\FrozenClams;
use App\Ch4\AF\Ingredients\PlumTomatoSauce;
use App\Ch4\AF\Ingredients\SlicedPepperoni;
use App\Ch4\AF\Ingredients\ThickCrustDough;
use App\Ch4\AF\Interfaces\PizzaIngredientFactory;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new Mozzarella();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new EggPlant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FrozenClams();
    }
}