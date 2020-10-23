<?php
 namespace App\Ch8\TemplateWithHook;

 abstract class CaffeineBeverageWithHook
 {
     final public function prepareRecipe(): void
     {
         $this->boilWater();
         $this->brew();
         $this->pourInCup();
         if ($this->customerWantsCondiments()) {
            $this->addCondiments();
         }
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

    public function customerWantsCondiments(): bool
    {
        return true;
    }
 }