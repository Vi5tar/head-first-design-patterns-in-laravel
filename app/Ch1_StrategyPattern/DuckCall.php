<?php

namespace App\Ch1_StrategyPattern;

use App\Ch1_StrategyPattern\DuckBehaviors\Quack;

class DuckCall
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
}