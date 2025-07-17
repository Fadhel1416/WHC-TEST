<?php

declare(strict_types=1);

namespace App\Command;

use App\interface\CommandInterface;

class CommandFactory
{
    public static function getCommand(string $name): CommandInterface
    {
        return match (strtolower($name)) {
            'add' => new AddCommand(),
            'sort-asc' => new SortAscCommand(),
            'repo-desc' => new RepoDescCommand(),
            default => throw new \InvalidArgumentException("Unknown command: $name"),
        };
    }
}
