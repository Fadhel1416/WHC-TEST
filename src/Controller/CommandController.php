<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\CommandService;
use InvalidArgumentException;

class CommandController
{
    public function handle(array $request): mixed
    {
        if (!isset($request['input']) || empty(trim($request['input']))) {
            throw new InvalidArgumentException("Missing input.");
        }

        $service = new CommandService();
        return $service->process($request['input']);
    }
}
