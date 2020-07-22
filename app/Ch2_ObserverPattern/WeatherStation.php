<?php

namespace App\Ch2_ObserverPattern;

use App\WeatherData;
use App\CurrentConditionDisplay;

class WeatherStation
{
    protected WeatherData $weatherData;
    protected CurrentConditionDisplay $currentDisplay;

    public function __construct() {
        $this->weatherData = new WeatherData();
        $this->currentDisplay = new CurrentConditionDisplay($this->weatherData);

        // can be done in tinker
        // $this->weatherData.setMeasurements(80, 65, 30.4);
        // $this->weatherData.setMeasurements(82, 70, 29.2);
        // $this->weatherData.setMeasurements(78, 90, 29.2);
    }
}
