<?php

namespace App\Ch6\Interfaces;

interface Command {
    public function execute(): void;
    public function undo(): void;
}