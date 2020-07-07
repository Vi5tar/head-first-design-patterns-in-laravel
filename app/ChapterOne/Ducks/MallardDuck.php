<?php

namespace App\ChapterOne\Ducks;

use App\ChapterOne\DuckBehaviors\Quack;
use App\ChapterOne\DuckBehaviors\FlyWithWings;

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