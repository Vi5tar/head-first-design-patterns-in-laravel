<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo 'Quack!';
    }
}