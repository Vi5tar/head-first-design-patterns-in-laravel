<?php

namespace App\Ch1_StrategyPattern\Ducks;

use App\Ch1_StrategyPattern\DuckBehaviors\Quack;
use App\Ch1_StrategyPattern\DuckBehaviors\FlyNoWay;

class ModelDuck extends Duck{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display():void
    {
        echo 'Prototype futuristic looking duck';
    }
}