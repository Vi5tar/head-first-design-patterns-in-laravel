<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle\Weapons;

use App\Ch1_StrategyPattern\DesignPuzzle\Interfaces\WeaponBehavior;

class Axe implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Swings axe with incredible force!';
    }
}
