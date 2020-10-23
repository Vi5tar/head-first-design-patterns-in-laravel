<?php

namespace App\Ch8\DuckSorting;

use App\Ch8\Interfaces\Comparable;

Class Duck implements Comparable
{
    public string $name;
    public int $weight;

    public function __construct(string $name, int $weight) {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function __toString()
    {
        return "$this->name weighs $this->weight";
    }

    public static function compareTo($duck1, $duck2): int
    {
        if ($duck1->weight < $duck2->weight) {
            return -1;
        } else if ($duck1->weight === $duck2->weight) {
            return 0;
        } else if ($duck1->weight > $duck2->weight) {
            return 1;
        }
    }
}