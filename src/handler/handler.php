<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../';  // One level up from Handler => src/

    $relativeClass = str_replace($prefix, '', $class);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

use App\Controller\CommandController;

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Only POST requests are allowed.");
    }

    $controller = new CommandController();
    $response = $controller->handle($_POST);

    echo json_encode(['success' => true, 'result' => $response]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
