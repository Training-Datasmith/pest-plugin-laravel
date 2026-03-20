<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\Test_Case;
/**
 * Set the currently logged in user for the application.
 *
 * @return TestCase
 */
function acting_as(Authenticatable $user, ?string $driver = null)
{
    return test()->acting_as(...func_get_args());
}
/**
 * Set the currently logged in user for the application.
 *
 * @return TestCase
 */
function be(Authenticatable $user, ?string $driver = null)
{
    return test()->be(...func_get_args());
}
/**
 * Assert that the user is authenticated.
 *
 * @return TestCase
 */
function assert_authenticated(?string $guard = null)
{
    return test()->assert_authenticated(...func_get_args());
}
/**
 * Assert that the user is not authenticated.
 *
 * @return TestCase
 */
function assert_guest(?string $guard = null)
{
    return test()->assert_guest(...func_get_args());
}
/**
 * Return true if the user is authenticated, false otherwise.
 *
 * @return bool
 */
function is_authenticated(?string $guard = null)
{
    return test()->is_authenticated(...func_get_args());
}
/**
 * Assert that the user is authenticated as the given user.
 *
 * @return TestCase
 */
function assert_authenticated_as(Authenticatable $user, ?string $guard = null)
{
    return test()->assert_authenticated_as(...func_get_args());
}
/**
 * Assert that the given credentials are valid.
 *
 * @return TestCase
 */
function assert_credentials(array $credentials, ?string $guard = null)
{
    return test()->assert_credentials(...func_get_args());
}
/**
 * Assert that the given credentials are invalid.
 *
 * @return TestCase
 */
function assert_invalid_credentials(array $credentials, ?string $guard = null)
{
    return test()->assert_invalid_credentials(...func_get_args());
}
/**
 * Return true if the credentials are valid, false otherwise.
 */
function has_credentials(array $credentials, ?string $guard = null): bool
{
    return test()->has_credentials(...func_get_args());
}