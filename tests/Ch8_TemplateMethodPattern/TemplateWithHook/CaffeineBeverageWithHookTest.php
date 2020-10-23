<?php

namespace Tests\Ch8\TemplateWithHook;

use App\Ch8\TemplateWithHook\CaffeineBeverageWithHook;
use PHPUnit\Framework\TestCase;


class CaffeineBeverageWithHookTest extends TestCase
{
    protected static $cafBeverage;

    public static function setUpBeforeClass(): void
    {
        self::$cafBeverage = new class extends CaffeineBeverageWithHook {
            public function brew(){}
            public function addCondiments(){}
        };
    }

    /** @test */
    public function it_can_boil_water()
    {
        self::$cafBeverage->boilWater();

        $this->expectOutputString("Boiling water\n");
    }

    /** @test */
    public function it_can_pour_into_a_cup()
    {
        self::$cafBeverage->pourInCup();

        $this->expectOutputString("Pouring into cup\n");
    }

    public function it_assumes_customer_wants_condiments()
    {
        $this->assertTrue(self::$cafBeverage->customerWantsCondiments());
    }

    /** @test */
    public function it_prepares_recipe()
    {
        $mock = $this->getMockBuilder(CaffeineBeverageWithHook::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mock->expects($this->once())->method('boilWater');
        $mock->expects($this->once())->method('brew');
        $mock->expects($this->once())->method('pourInCup');
        $mock->expects($this->once())->method('customerWantsCondiments')
            ->will($this->returnValue(true));
        $mock->expects($this->once())->method('addCondiments');

        $mock->prepareRecipe();
    }
}