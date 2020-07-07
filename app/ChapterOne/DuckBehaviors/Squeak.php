<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak!!';
    }
}