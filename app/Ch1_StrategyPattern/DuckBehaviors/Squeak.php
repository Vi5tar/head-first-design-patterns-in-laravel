<?php

namespace App\Ch1_StrategyPattern\DuckBehaviors;

use App\Ch1_StrategyPattern\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak!!';
    }
}