<?php

namespace App\Ch8\TemplateWithHook;

class TeaWithHook extends CaffeineBeverageWithHook
{
    public function brew(): void
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments(): void
    {
        echo "Adding Lemon\n";
    }

    public function customerWantsCondiments(): bool
    {
        $answer = $this->getUserInput();

        return (substr(strtolower($answer), 0) === 'y');
    }

    public function getUserInput()
    {
        return readline("Would you like lemon with your coffee (y/n)?\n");
    }
}