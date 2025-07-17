<?php
namespace App\interface;

interface CommandInterface {
    public function execute(array $args): mixed;
}
