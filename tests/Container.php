<?php

declare(strict_types=1);

use function Pest\Laravel\withoutMiddleware;

withoutMiddleware()->get('/')->assertSee('laravel');
