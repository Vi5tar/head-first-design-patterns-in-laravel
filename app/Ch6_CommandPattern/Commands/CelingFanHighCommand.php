<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;
use App\Ch6\VendorClasses\CeilingFan;

class CeilingFanHighCommand implements Command
{
    public CeilingFan $ceilingFan;
    public int $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }
    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    public function undo(): void
    {
        $revertMethods = [
            CeilingFan::HIGH => 'high',
            CeilingFan::MEDIUM => 'medium',
            CeilingFan::LOW => 'low',
            CeilingFan::OFF => 'off',
        ];

        $method = $revertMethods[$this->prevSpeed];

        $this->ceilingFan->$method();
    }
}