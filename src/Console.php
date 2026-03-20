<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Foundation\Testing\Test_Case;
use Illuminate\Testing\Pending_Command;
/**
 * Call artisan command and return code.
 *
 * @return PendingCommand|int
 */
function artisan(string $command, array $parameters = [])
{
    return test()->artisan(...func_get_args());
}
/**
 * Disable mocking the console output.
 *
 * @return TestCase
 */
function without_mocking_console_output()
{
    return test()->without_mocking_console_output(...func_get_args());
}