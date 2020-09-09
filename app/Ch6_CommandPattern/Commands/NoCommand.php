<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;

class NoCommand implements Command
{
    public function execute(): void
    {
        echo "This slot is empty.";
    }
}