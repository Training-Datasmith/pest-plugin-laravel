<?php

declare(strict_types=1);

(static function (): void {
    $files = [
        'Authentication.php',
        'Console.php',
        'Container.php',
        'Database.php',
        'ExceptionHandling.php',
        'Expectations.php',
        'Http.php',
        'Session.php',
        'Time.php',
    ];

    foreach ($files as $file) {
        require_once __DIR__."/{$file}";
    }
})();
