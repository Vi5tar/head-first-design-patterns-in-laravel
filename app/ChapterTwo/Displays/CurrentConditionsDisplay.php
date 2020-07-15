<?php

namespace App\ChapterTwo\Displays;

use App\ChapterTwo\Interfaces\Subject;
use App\ChapterTwo\Interfaces\Observer;
use App\ChapterTwo\Interfaces\DisplayElement;

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
        echo "Current conditions: $this->temperature degrees C and $this->humidity humidity.";
    }
}
