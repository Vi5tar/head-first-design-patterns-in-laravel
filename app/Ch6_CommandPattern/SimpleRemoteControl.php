<?php

namespace App\Ch6;

use App\Ch6\Interfaces\Command;

class SimpleRemoteControl
{
    public Command $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}