<?php

namespace App\ChapterOne;

use App\ChapterOne\DuckBehaviors\Quack;

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