<?php
 namespace App\Ch8\BasicTemplate;

 abstract class CaffeineBeverage
 {
     final public function prepareRecipe(): void
     {
         $this->boilWater();
         $this->brew();
         $this->pourInCup();
         $this->addCondiments();
     }

     abstract public function brew();

     abstract public function addCondiments();

     public function boilWater(): void
    {
        echo "Boiling water\n";
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup\n";
    }
 }