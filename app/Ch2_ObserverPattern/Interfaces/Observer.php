<?php
namespace App\Ch2_ObserverPattern\Interfaces;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}