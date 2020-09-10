<?php

namespace App\Ch6\VendorClasses;

class Stereo
{
    public function on()
    {
        echo "Stereo is now on.\n";
    }

    public function off()
    {
        echo "Stereo is now off.\n";
    }

    public function setCd()
    {
        echo "Stereo input set to CD.\n";
    }

    public function setDvd()
    {
        echo "Stereo input set to DVD.\n";
    }

    public function setRadio()
    {
        echo "Stereo input set to Radio.\n";
    }

    public function setVolume(int $level)
    {
        echo "Stereo volume is set to $level.\n";
    }
}