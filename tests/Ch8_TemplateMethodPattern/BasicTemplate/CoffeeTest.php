<?php

namespace Tests\Ch8\BasicTemplate;

use App\Ch8\BasicTemplate\Coffee;
use PHPUnit\Framework\TestCase;

class CoffeeTest extends TestCase
{
    /** @test */
    public function it_can_boil_water()
    {
        $coffee = new Coffee();

        $coffee->boilWater();

        $this->expectOutputString("Boiling water\n");
    }

    /** @test */
    public function it_can_brew_coffee_grinds()
    {
        $coffee = new Coffee();

        $coffee->brew();

        $this->expectOutputString("Dripping Coffee through filter\n");
    }

    /** @test */
    public function it_can_pour_into_a_cup()
    {
        $coffee = new Coffee();

        $coffee->pourInCup();

        $this->expectOutputString("Pouring into cup\n");
    }
    
    /** @test */
    public function it_can_add_sugar_and_milk()
    {
        $coffee = new Coffee();

        $coffee->addCondiments();

        $this->expectOutputString("Adding Sugar and Milk\n");
    }


    /** @test */
    public function it_prepares_coffee_recipe()
    {
        $mockCoffee = $this->getMockBuilder(Coffee::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mockCoffee->expects($this->once())->method('boilWater');
        $mockCoffee->expects($this->once())->method('brew');
        $mockCoffee->expects($this->once())->method('pourInCup');
        $mockCoffee->expects($this->once())->method('addCondiments');

        $mockCoffee->prepareRecipe();
    }
}