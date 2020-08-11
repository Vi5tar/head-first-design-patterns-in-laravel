<?php

namespace App\Ch4\AF\Pizzas;

use App\Ch4\AF\Pizza;
use App\Ch4\AF\Interfaces\PizzaIngredientFactory;

class ClamPizza extends Pizza
{
    public PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing $this->name\n";
        $this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}