<?php

namespace App\ChapterOne\DesignPuzzle\Weapons;

use App\ChapterOne\DesignPuzzle\Interfaces\WeaponBehavior;

class Sword implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Strikes intentionaly with sword!';
    }
}