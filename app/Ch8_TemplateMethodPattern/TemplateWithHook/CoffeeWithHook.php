<?php

namespace App\Ch8\TemplateWithHook;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew(): void
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments(): void
    {
        echo "Adding Sugar and Milk\n";
    }

    public function customerWantsCondiments(): bool
    {
        $answer = $this->getUserInput();

        return (substr(strtolower($answer), 0) === 'y');
    }

    public function getUserInput()
    {
        return readline("Would you like milk and sugar with your coffee (y/n)?\n");
    }
}