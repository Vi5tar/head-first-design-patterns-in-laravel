<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle\Weapons;

use App\Ch1_StrategyPattern\DesignPuzzle\Interfaces\WeaponBehavior;

class Knife implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Quickly slices with knife!';
    }
}
