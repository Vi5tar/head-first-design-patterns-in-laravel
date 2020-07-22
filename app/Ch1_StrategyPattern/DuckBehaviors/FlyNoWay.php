<?php

namespace App\Ch1_StrategyPattern\DuckBehaviors;

use App\Ch1_StrategyPattern\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'I can\'t fly';
    }
}