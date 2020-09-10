<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;
use App\Ch6\VendorClasses\Light;

class LightOnCommand implements Command
{
    public Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}