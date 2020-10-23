<?php

namespace Tests\Ch8\BasicTemplate;

use App\Ch8\BasicTemplate\Tea;
use PHPUnit\Framework\TestCase;

class TeaTest extends TestCase
{
    /** @test */
    public function it_can_boil_water()
    {
        $tea = new Tea();

        $tea->boilWater();

        $this->expectOutputString("Boiling water\n");
    }

    /** @test */
    public function it_can_steepTeaBag()
    {
        $tea = new Tea();

        $tea->brew();

        $this->expectOutputString("Steeping the tea\n");
    }

    /** @test */
    public function it_can_pour_into_a_cup()
    {
        $tea = new Tea();

        $tea->pourInCup();

        $this->expectOutputString("Pouring into cup\n");
    }
    
    /** @test */
    public function it_can_add_lemon()
    {
        $tea = new Tea();

        $tea->addCondiments();

        $this->expectOutputString("Adding Lemon\n");
    }


    /** @test */
    public function it_prepares_tea_recipe()
    {
        $mockTea = $this->getMockBuilder(Tea::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mockTea->expects($this->once())->method('boilWater');
        $mockTea->expects($this->once())->method('brew');
        $mockTea->expects($this->once())->method('pourInCup');
        $mockTea->expects($this->once())->method('addCondiments');

        $mockTea->prepareRecipe();
    }
}