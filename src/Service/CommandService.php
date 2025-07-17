<?php

declare(strict_types=1);

namespace App\Service;

use App\Command\CommandFactory;

class CommandService
{
    public function process(string $input): mixed
    {
        $input = trim($input);
        $parts = preg_split('/\s+/', $input);

        if (empty($parts)) {
            throw new \InvalidArgumentException("Input is empty.");
        }

        $commandName = strtolower(array_shift($parts));
        $command = CommandFactory::getCommand($commandName);
        $result = $command->execute($parts);

        return is_array($result) ? implode(', ', $result) : $result;
    }
}
