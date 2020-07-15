<?php

namespace App\ChapterTwo;

use App\ChapterTwo\Interfaces\Subject;
use App\ChapterTwo\Interfaces\Observer;

class WeatherData implements Subject
{
    private array $observers = [];
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function registerObserver(Observer $o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o)
    {
        $key = array_search($o, $this->observers);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function getMeasurements()
    {
        $ipGeoInfo = json_decode(file_get_contents('https://geolocation.outreach.com/city'));
        $lat = round($ipGeoInfo->latitude, 2);
        $lon = round($ipGeoInfo->longitude, 2);

        // hack I found on stackoverflow
        // https://stackoverflow.com/a/11680906/13156571
        ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0)');
        $weatherData = json_decode(file_get_contents("https://fcc-weather-api.glitch.me/api/current?lat=$lat&lon=$lon"));

        $this->temperature = $weatherData->main->temp;
        $this->humidity = $weatherData->main->humidity;
        $this->pressure = $weatherData->main->pressure;

        $this->measurementsChanged();
    }
}

