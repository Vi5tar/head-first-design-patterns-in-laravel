<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle;

use App\Ch1_StrategyPattern\DesignPuzzle\Weapons\Sword;

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
