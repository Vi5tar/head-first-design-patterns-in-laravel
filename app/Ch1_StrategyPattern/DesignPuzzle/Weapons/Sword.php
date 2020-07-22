<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle\Weapons;

use App\Ch1_StrategyPattern\DesignPuzzle\Interfaces\WeaponBehavior;

class Sword implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Strikes intentionaly with sword!';
    }
}