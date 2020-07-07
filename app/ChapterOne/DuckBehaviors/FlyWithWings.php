<?php

namespace App\ChapterOne\DuckBehaviors;

use App\ChapterOne\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'Moving my wings up and down to fly!!';
    }
}
