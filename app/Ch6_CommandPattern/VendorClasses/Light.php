<?php

namespace App\Ch6\VendorClasses;

class Light
{
    public string $room;

    public function __construct(string $room) {
        $this->room = $room;
    }
    
    public function on()
    {
        echo "The $this->room light is now on sucka!\n";
    }

    public function off()
    {
        echo "The $this->room light is now off bro!\n";
    }
}
