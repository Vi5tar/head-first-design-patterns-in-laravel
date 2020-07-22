<?php

namespace App\Ch1_StrategyPattern\DuckBehaviors;

use App\Ch1_StrategyPattern\Interfaces\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo 'Rocket powered flight!!';
    }
}