<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo 'Rocket powered flight!!';
    }
}