<?php

declare(strict_types=1);

namespace App\Command;

use App\interface\CommandInterface;

class AddCommand implements CommandInterface
{
    public function execute(array $args): float
    {
        foreach ($args as $arg) {
            if (!is_numeric($arg)) {
                throw new \InvalidArgumentException("All arguments must be numeric.");
            }
        }
        return array_sum($args);
    }
}
