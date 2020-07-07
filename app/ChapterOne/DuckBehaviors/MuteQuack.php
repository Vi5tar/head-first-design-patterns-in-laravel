<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '';
    }
}