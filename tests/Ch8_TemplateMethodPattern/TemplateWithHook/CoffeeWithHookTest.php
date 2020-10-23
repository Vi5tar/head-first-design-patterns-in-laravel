<?php

namespace Tests\Ch8\TemplateWithHook;

use App\Ch8\TemplateWithHook\CoffeeWithHook;
use PHPUnit\Framework\TestCase;

class CoffeeWithHookTest extends TestCase
{
    /** @test */
    public function it_can_boil_water()
    {
        $coffee = new CoffeeWithHook();

        $coffee->boilWater();

        $this->expectOutputString("Boiling water\n");
    }

    /** @test */
    public function it_can_brew_coffee_grinds()
    {
        $coffee = new CoffeeWithHook();

        $coffee->brew();

        $this->expectOutputString("Dripping Coffee through filter\n");
    }

    /** @test */
    public function it_can_pour_into_a_cup()
    {
        $coffee = new CoffeeWithHook();

        $coffee->pourInCup();

        $this->expectOutputString("Pouring into cup\n");
    }

    /** @test */
    public function it_asks_if_customer_wants_condiments()
    {
        $mockCoffee = $this->getMockBuilder(CoffeeWithHook::class)
            ->setMethodsExcept(['customerWantsCondiments'])
            ->getMock();

        $mockCoffee->expects($this->once())->method('getUserInput')->willReturn('y');

        $this->assertTrue($mockCoffee->customerWantsCondiments());
    }
    
    /** @test */
    public function it_can_add_sugar_and_milk()
    {
        $coffee = new CoffeeWithHook();

        $coffee->addCondiments();

        $this->expectOutputString("Adding Sugar and Milk\n");
    }


    /** @test */
    public function it_prepares_coffee_recipe()
    {
        $mockCoffee = $this->getMockBuilder(CoffeeWithHook::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mockCoffee->expects($this->once())->method('boilWater');
        $mockCoffee->expects($this->once())->method('brew');
        $mockCoffee->expects($this->once())->method('pourInCup');
        $mockCoffee->expects($this->once())->method('customerWantsCondiments')
            ->will($this->returnValue(true));
        $mockCoffee->expects($this->once())->method('addCondiments');

        $mockCoffee->prepareRecipe();
    }
}