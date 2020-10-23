<?php

namespace App\Ch8\BasicTemplate;

class Tea extends CaffeineBeverage
{
    public function brew(): void
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments(): void
    {
        echo "Adding Lemon\n";
    }
}