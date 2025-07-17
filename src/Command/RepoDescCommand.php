<?php

declare(strict_types=1);

namespace App\Command;

use App\interface\CommandInterface;

class RepoDescCommand implements CommandInterface
{
    public function execute(array $args): string
    {
        if (count($args) < 2) {
            throw new \InvalidArgumentException("Please provide both owner and repository name.");
        }

        [$owner, $repo] = $args;
        $url = "https://api.github.com/repos/$owner/$repo";

        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "User-Agent: PHP"
            ]
        ];

        $context = stream_context_create($opts);
        $response = file_get_contents($url, false, $context);

        if (!$response) {
            throw new \Exception("Failed to fetch repository.");
        }

        $data = json_decode($response, true);

        return $data['description'] ?? 'No description available.';
    }
}
