<?php

namespace App\Ch3_DecoratingObjects;

class Soy extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }
    
    public function getSize()
    {
        return $this->beverage->getSize();
    }
    
    public function cost()
    {
        $cost = $this->beverage->cost();
        
        if ($this->getSize() === Beverage::TALL) {
            $cost += .15;
        } else if ($this->getSize() === Beverage::GRANDE) {
            $cost += .20;
        } else if ($this->getSize() === Beverage::VENTI) {
            $cost += .25;
        }

        return $cost;
    }
}