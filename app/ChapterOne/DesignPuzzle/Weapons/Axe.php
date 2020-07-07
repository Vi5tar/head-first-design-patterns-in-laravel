<?php

namespace App\ChapterOne\DesignPuzzle\Weapons;

use App\ChapterOne\DesignPuzzle\Interfaces\WeaponBehavior;

class Axe implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Swings axe with incredible force!';
    }
}
