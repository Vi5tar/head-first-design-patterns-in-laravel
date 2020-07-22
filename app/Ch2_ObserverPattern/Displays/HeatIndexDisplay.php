<?php

namespace App\Ch2_ObserverPattern\Displays;

use App\Ch2_ObserverPattern\Interfaces\Subject;
use App\Ch2_ObserverPattern\Interfaces\Observer;
use App\Ch2_ObserverPattern\Interfaces\DisplayElement;

class HeatIndexDisplay implements Observer, DisplayElement
{
    private float $heatIndex;
    private Subject $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->heatIndex = -42.379 + 2.04901523 * $temp + 10.14333127 * $humidity - .22475541 * $temp * $humidity - .00683783 * $temp * $temp - .05481717* $humidity * $humidity + .00122874 * $temp * $temp * $humidity + .00085282 * $temp * $humidity * $humidity - .00000199 * $temp * $temp * $humidity * $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Heat index is $this->heatIndex.\n\n";
    }
}