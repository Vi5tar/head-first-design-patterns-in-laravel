<?php

namespace App\Ch1_StrategyPattern\Ducks;

use App\Ch1_StrategyPattern\DuckBehaviors\Quack;
use App\Ch1_StrategyPattern\DuckBehaviors\FlyWithWings;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display():void
    {
        echo 'Looks like a Mallard Duck';
    }
}