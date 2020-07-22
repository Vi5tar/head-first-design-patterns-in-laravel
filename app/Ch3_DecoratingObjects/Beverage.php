<?php

namespace App\Ch3_DecoratingObjects;

abstract class Beverage {
    public const TALL = 0;
    public const GRANDE = 1;
    public const VENTI = 2;

    protected string $description = "Unknown Beverage";
    protected int $size = self::TALL;

    public function getDescription()
    {
        return $this->description;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize(int $size)
    {
        if ($size === self::TALL || $size === self::GRANDE || $size === self::VENTI) {
            $this->size = $size;
            return;
        }
        return "Invalid Size";
    }

    public abstract function cost();
}