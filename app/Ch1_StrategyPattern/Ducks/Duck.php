<?php

namespace App\Ch1_StrategyPattern\Ducks;

use App\Ch1_StrategyPattern\Interfaces\FlyBehavior;
use App\Ch1_StrategyPattern\Interfaces\QuackBehavior;

abstract class Duck {
    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;

    public abstract function display():void;

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function swim():void
    {
        echo 'Floating on some water';
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}