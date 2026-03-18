<?php

declare(strict_types=1);

use function Pest\Laravel\startSession;

startSession(['foo' => 'bar'])->assertGuest();
