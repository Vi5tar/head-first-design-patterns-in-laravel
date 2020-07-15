<?php

namespace App\ChapterTwo\Interfaces;

interface Subject 
{
    public function registerObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObservers();
}