<?php

namespace App\Ch8\Interfaces;

interface Comparable
{
    public static function compareTo($object1, $object2): int;
}