<?php

namespace App\Ch6;

use App\Ch6\Commands\NoCommand;
use App\Ch6\Interfaces\Command;

class RemoteControl
{
    public array $onCommands, $offCommands;
    public Command $noCommand;

    public function __construct() {
        $this->noCommand = new NoCommand();

        for ($i=0; $i < 7; $i++) { 
            $this->onCommands[$i] = $this->noCommand;
            $this->offCommands[$i] = $this->noCommand;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }
}