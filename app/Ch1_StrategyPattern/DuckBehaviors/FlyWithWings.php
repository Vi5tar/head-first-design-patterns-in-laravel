<?php

namespace App\Ch1_StrategyPattern\DuckBehaviors;

use App\Ch1_StrategyPattern\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'Moving my wings up and down to fly!!';
    }
}
