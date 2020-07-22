<?php

namespace App\Ch3_DecoratingObjects;

class Mocha extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocah";
    }

    public function getSize()
    {
        return $this->beverage->getSize();
    }
    
    public function cost()
    {
        $cost = $this->beverage->cost();
        
        if ($this->getSize() === Beverage::TALL) {
            $cost += .20;
        } else if ($this->getSize() === Beverage::GRANDE) {
            $cost += .25;
        } else if ($this->getSize() === Beverage::VENTI) {
            $cost += .25;
        }
        
        return $cost;
    }
}