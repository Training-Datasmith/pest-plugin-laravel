<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Foundation\Testing\Test_Case;
/**
 * Set the session to the given array.
 *
 * @return TestCase
 */
function with_session(array $data)
{
    return test()->with_session(...func_get_args());
}
/**
 * Set the session to the given array.
 *
 * @return TestCase
 */
function session(array $data)
{
    return test()->session(...func_get_args());
}
/**
 * Start the session for the application.
 *
 * @return TestCase
 */
function start_session()
{
    return test()->start_session(...func_get_args());
}
/**
 * Flush all of the current session data.
 *
 * @return TestCase
 */
function flush_session()
{
    return test()->flush_session(...func_get_args());
}