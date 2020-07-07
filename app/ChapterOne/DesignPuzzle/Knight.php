<?php

namespace App\ChapterOne\DesignPuzzle;

use App\ChapterOne\DesignPuzzle\Weapons\Sword;

class Knight extends Character
{
    public function __construct()
    {
        $this->weapon = new Sword();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}
