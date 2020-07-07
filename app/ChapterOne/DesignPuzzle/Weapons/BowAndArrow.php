<?php

namespace App\ChapterOne\DesignPuzzle\Weapons;

use App\ChapterOne\DesignPuzzle\Interfaces\WeaponBehavior;

class BowAndArrow implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Pulls bowstring and launches arrow!';
    }
}