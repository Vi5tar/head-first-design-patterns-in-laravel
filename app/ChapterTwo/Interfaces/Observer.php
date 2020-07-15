<?php
namespace App\ChapterTwo\Interfaces;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}