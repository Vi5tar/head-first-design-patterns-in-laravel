<?php

namespace App\Ch2_ObserverPattern\Displays;

use App\Ch2_ObserverPattern\Interfaces\Subject;
use App\Ch2_ObserverPattern\Interfaces\Observer;
use App\Ch2_ObserverPattern\Interfaces\DisplayElement;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature, $humidity;
    private Subject $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: $this->temperature"."°F and $this->humidity humidity.\n\n";
    }
}
