<?php

namespace Tests\Ch8\TemplateWithHook;

use App\Ch8\TemplateWithHook\TeaWithHook;
use PHPUnit\Framework\TestCase;

class TeaWithHookTest extends TestCase
{
    /** @test */
    public function it_can_boil_water()
    {
        $tea = new TeaWithHook();

        $tea->boilWater();

        $this->expectOutputString("Boiling water\n");
    }

    /** @test */
    public function it_can_steepTeaBag()
    {
        $tea = new TeaWithHook();

        $tea->brew();

        $this->expectOutputString("Steeping the tea\n");
    }

    /** @test */
    public function it_can_pour_into_a_cup()
    {
        $tea = new TeaWithHook();

        $tea->pourInCup();

        $this->expectOutputString("Pouring into cup\n");
    }

    /** @test */
    public function it_asks_if_customer_wants_condiments()
    {
        $mockTea = $this->getMockBuilder(TeaWithHook::class)
            ->setMethodsExcept(['customerWantsCondiments'])
            ->getMock();

        $mockTea->expects($this->once())->method('getUserInput')->willReturn('y');

        $this->assertTrue($mockTea->customerWantsCondiments());
    }
    
    /** @test */
    public function it_can_add_lemon()
    {
        $tea = new TeaWithHook();

        $tea->addCondiments();

        $this->expectOutputString("Adding Lemon\n");
    }


    /** @test */
    public function it_prepares_tea_recipe()
    {
        $mockTea = $this->getMockBuilder(TeaWithHook::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mockTea->expects($this->once())->method('boilWater');
        $mockTea->expects($this->once())->method('brew');
        $mockTea->expects($this->once())->method('pourInCup');
        $mockTea->expects($this->once())->method('customerWantsCondiments')
            ->will($this->returnValue(true));
        $mockTea->expects($this->once())->method('addCondiments');

        $mockTea->prepareRecipe();
    }
}