<?php

namespace App\ChapterOne\Ducks;

use App\ChapterOne\DuckBehaviors\Quack;
use App\ChapterOne\DuckBehaviors\FlyNoWay;

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