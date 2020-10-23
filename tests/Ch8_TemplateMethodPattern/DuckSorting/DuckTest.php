<?php

namespace Tests\DuckSorting\Ch8;

use App\Ch8\DuckSorting\Duck;
use PHPUnit\Framework\TestCase;

Class DuckTest extends TestCase
{
    /** @test */
    public function it_prints_its_name_and_weight()
    {
        $duck = new Duck('Bjorn', 13);

        print($duck);

        $this->expectOutputString("Bjorn weighs 13");
    }

    /** @test */
    public function it_sorts_ducks_by_weight()
    {
        $d1 = new Duck('Cloud', 8);
        $d2 = new Duck('Aerith', 6);
        $d3 = new Duck('Tifa', 7);
        $d4 = new Duck('Barret', 15);
        $d5 = new Duck('Cid', 10);
        $d6 = new Duck('Red XIII', 9);

        $ducks = [
            $d1,
            $d2,
            $d3,
            $d4,
            $d5,
            $d6,
        ];
        
        usort($ducks, 'App\Ch8\DuckSorting\Duck::compareTo');

        $this-> assertEquals(
            [$d2, $d3, $d1, $d6, $d5, $d4],
            $ducks
        );
    }
}