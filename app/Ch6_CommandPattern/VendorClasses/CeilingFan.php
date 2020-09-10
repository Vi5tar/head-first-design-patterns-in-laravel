<?php

namespace App\Ch6\VendorClasses;

Class CeilingFan
{
    public const HIGH = 3;
    public const MEDIUM = 2;
    public const LOW = 1;
    public const OFF = 0;

    public string $room;
    public int $speed;

    public function __construct(string $room) {
        $this->room = $room;
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo "$this->room fan is now set to high.\n";
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo "$this->room fan is now set to medium.\n";
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo "$this->room fan is now set to low.\n";
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo "$this->room fan is now off.\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}