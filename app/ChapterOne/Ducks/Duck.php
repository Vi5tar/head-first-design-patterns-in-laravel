<?php

namespace App\ChapterOne\Ducks;

use App\ChapterOne\Interfaces\FlyBehavior;
use App\ChapterOne\Interfaces\QuackBehavior;

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