<?php

namespace App\ChapterOne\DesignPuzzle;

use App\ChapterOne\DesignPuzzle\Weapons\Knife;

class King extends Character
{
    public function __construct()
    {
        $this->weapon = new Knife();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}