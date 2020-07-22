<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle;

use App\Ch1_StrategyPattern\DesignPuzzle\Weapons\BowAndArrow;

class Queen extends Character
{
    public function __construct()
    {
        $this->weapon = new BowAndArrow();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}
