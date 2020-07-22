<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle;

use App\Ch1_StrategyPattern\DesignPuzzle\Weapons\Knife;

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