<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'I can\'t fly';
    }
}