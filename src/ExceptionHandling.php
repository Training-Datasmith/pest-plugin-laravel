<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Foundation\Testing\Test_Case;
/**
 * Restore exception handling.
 *
 * @return TestCase
 */
function with_exception_handling()
{
    return test()->with_exception_handling(...func_get_args());
}
/**
 * Only handle the given exceptions via the exception handler.
 *
 * @return TestCase
 */
function handle_exceptions(array $exceptions)
{
    return test()->handle_exceptions(...func_get_args());
}
/**
 * Only handle validation exceptions via the exception handler.
 *
 * @return TestCase
 */
function handle_validation_exceptions()
{
    return test()->handle_validation_exceptions(...func_get_args());
}
/**
 * Disable exception handling for the test.
 *
 * @return TestCase
 */
function without_exception_handling(array $except = [])
{
    return test()->without_exception_handling(...func_get_args());
}