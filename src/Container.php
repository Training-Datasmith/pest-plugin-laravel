<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Closure;
use Illuminate\Foundation\Testing\Test_Case;
use Mockery\Mock_Interface;
/**
 * Register an instance of an object in the container.
 */
function swap(string $abstract, object $instance): object
{
    return test()->swap(...func_get_args());
}
/**
 * Register an instance of an object in the container.
 */
function instance(string $abstract, object $instance): object
{
    return test()->instance(...func_get_args());
}
/**
 * Mock an instance of an object in the container.
 */
function mock(string $abstract, ?Closure $mock = null): Mock_Interface
{
    return test()->mock(...func_get_args());
}
/**
 * Mock a partial instance of an object in the container.
 */
function partial_mock(string $abstract, ?Closure $mock = null): Mock_Interface
{
    return test()->partial_mock(...func_get_args());
}
/**
 * Spy an instance of an object in the container.
 */
function spy(string $abstract, ?Closure $mock = null): Mock_Interface
{
    return test()->spy(...func_get_args());
}
/**
 * Instruct the container to forget a previously mocked / spied instance of an object.
 *
 * @return TestCase
 */
function forget_mock(string $abstract)
{
    return test()->forget_mock(...func_get_args());
}
/**
 * Register an empty handler for the `defer` helper in the container.
 *
 * @return TestCase
 */
function without_defer()
{
    return test()->without_defer(...func_get_args());
}
/**
 * Restore the `defer` helper in the container.
 *
 * @return TestCase
 */
function with_defer()
{
    return test()->with_defer(...func_get_args());
}
/**
 * Register an empty handler for Laravel Mix in the container.
 *
 * @return TestCase
 */
function without_mix()
{
    return test()->without_mix(...func_get_args());
}
/**
 * Restore Laravel Mix in the container.
 *
 * @return TestCase
 */
function with_mix()
{
    return test()->with_mix(...func_get_args());
}
/**
 * Register an empty handler for Vite in the container.
 *
 * @return TestCase
 */
function without_vite()
{
    return test()->without_vite(...func_get_args());
}
/**
 * Restore Vite in the container.
 *
 * @return TestCase
 */
function with_vite()
{
    return test()->with_vite(...func_get_args());
}