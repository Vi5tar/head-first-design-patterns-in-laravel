<?php

namespace App\ChapterOne\DesignPuzzle;

use App\ChapterOne\DesignPuzzle\Weapons\BowAndArrow;

class Queen extends Character
{
    public function __construct()
    {
        $this->weapon = new BowAndArrow();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}
