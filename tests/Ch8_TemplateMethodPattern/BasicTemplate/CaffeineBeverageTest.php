<?php

namespace Tests\Ch8\BasicTemplate;

use App\Ch8\BasicTemplate\CaffeineBeverage;
use PHPUnit\Framework\TestCase;


class CaffeineBeverageTest extends TestCase
{
    protected static $cafBeverage;

    public static function setUpBeforeClass(): void
    {
        self::$cafBeverage = new class extends CaffeineBeverage {
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

    /** @test */
    public function it_prepares_recipe()
    {
        $mock = $this->getMockBuilder(CaffeineBeverage::class)
            ->setMethodsExcept(['prepareRecipe'])
            ->getMock();

        $mock->expects($this->once())->method('boilWater');
        $mock->expects($this->once())->method('brew');
        $mock->expects($this->once())->method('pourInCup');
        $mock->expects($this->once())->method('addCondiments');

        $mock->prepareRecipe();
    }
}