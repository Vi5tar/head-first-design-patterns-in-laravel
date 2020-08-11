<?php

namespace App\Ch4\AF\Interfaces;

use App\Ch4\AF\Ingredients\Clam;
use App\Ch4\AF\Ingredients\Dough;
use App\Ch4\AF\Ingredients\Sauce;
use App\Ch4\AF\Ingredients\Cheese;
use App\Ch4\AF\Ingredients\Pepperoni;

interface PizzaIngredientFactory
{
    public function createDough() : Dough;
    public function createSauce() : Sauce;
    public function createCheese() : Cheese;
    public function createVeggies() : array;
    public function createPepperoni() : Pepperoni;
    public function createClam() : Clam;
}