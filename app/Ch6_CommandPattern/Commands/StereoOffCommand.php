<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;
use App\Ch6\VendorClasses\Stereo;

class StereoOffCommand implements Command
{
    public Stereo $stereo;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
    }
}