<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle;

use App\Ch1_StrategyPattern\DesignPuzzle\Interfaces\WeaponBehavior;

abstract class Character
{
    protected WeaponBehavior $weapon;

    public abstract function fight():void;

    public function setWeapon(WeaponBehavior $weapon)
    {
        $this->weapon = $weapon;
    }
}
