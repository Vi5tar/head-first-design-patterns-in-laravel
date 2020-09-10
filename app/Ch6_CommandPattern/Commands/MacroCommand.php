<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;

class MacroCommand implements Command
{
    public array $commands;

    public function __construct(array $commands) {
        foreach ($commands as $key => $command) {
            if (!$command instanceof Command) {
                throw new Exception("Command[$key] must implement App\Ch6\Interfaces\Command");
            }
        }
        $this->commands = $commands;
    }
    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo(): void
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}