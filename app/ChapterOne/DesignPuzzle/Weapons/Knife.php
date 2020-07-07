<?php

namespace App\ChapterOne\DesignPuzzle\Weapons;

use App\ChapterOne\DesignPuzzle\Interfaces\WeaponBehavior;

class Knife implements WeaponBehavior
{
    public function useWeapon()
    {
        echo 'Quickly slices with knife!';
    }
}
