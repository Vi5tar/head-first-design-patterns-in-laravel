<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle\Weapons;

use App\Ch1_StrategyPattern\DesignPuzzle\Interfaces\WeaponBehavior;

class BowAndArrow implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Pulls bowstring and launches arrow!';
    }
}