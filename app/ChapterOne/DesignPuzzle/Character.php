<?php

namespace App\ChapterOne\DesignPuzzle;

use App\ChapterOne\DesignPuzzle\Interfaces\WeaponBehavior;

abstract class Character
{
    protected WeaponBehavior $weapon;

    public abstract function fight():void;

    public function setWeapon(WeaponBehavior $weapon)
    {
        $this->weapon = $weapon;
    }
}
