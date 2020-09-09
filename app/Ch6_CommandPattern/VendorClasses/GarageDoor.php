<?php

namespace App\Ch6\VendorClasses;

class GarageDoor
{
    public function up()
    {
        echo "Garage door is raising.\n";
    }

    public function down()
    {
        echo "Garage door is lowering.\n";
    }

    public function stop()
    {
        echo "Stopped the garage door.\n";
    }

    public function lightOn()
    {
        echo "Garage door light is now on.";
    }

    public function lightOff()
    {
        echo "Garage door light is now off.";
    }
}