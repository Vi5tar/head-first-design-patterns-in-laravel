<?php

namespace App\ChapterOne\DesignPuzzle;

use App\ChapterOne\DesignPuzzle\Weapons\Axe;

class Troll extends Character
{
    public function __construct()
    {
        $this->weapon = new Axe();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}
