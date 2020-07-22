<?php

namespace App\Ch1_StrategyPattern\DesignPuzzle;

use App\Ch1_StrategyPattern\DesignPuzzle\Weapons\Axe;

class Troll extends Character
{
    public function __construct()
    {
        $this->weapon = new Axe();
    }

    public function fight():void
    {
        $this->weapon->useWeapon();
    }
}
