<?php

declare(strict_types=1);

namespace App\Command;

use App\interface\CommandInterface;

class SortAscCommand implements CommandInterface
{
    public function execute(array $args): array
    {
        sort($args, SORT_NUMERIC);
        return $args;
    }
}
