<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\Test_Case;
/**
 * Assert that a given where condition exists in the database.
 *
 * @return TestCase
 */
function assert_database_has($table, array $data = [], ?string $connection = null)
{
    return test()->assert_database_has(...func_get_args());
}
/**
 * Assert that a given where condition does not exist in the database.
 *
 * @return TestCase
 */
function assert_database_missing($table, array $data = [], ?string $connection = null)
{
    return test()->assert_database_missing(...func_get_args());
}
/**
 * Assert that the given table has no entries.
 *
 * @return TestCase
 */
function assert_database_empty($table, ?string $connection = null)
{
    return test()->assert_database_empty(...func_get_args());
}
/**
 * Assert the given model exists in the database.
 *
 * @return TestCase
 */
function assert_model_exists(Model $model)
{
    return test()->assert_model_exists(...func_get_args());
}
/**
 * Assert the given model does not exist in the database.
 *
 * @return TestCase
 */
function assert_model_missing(Model $model)
{
    return test()->assert_model_missing(...func_get_args());
}
/**
 * Assert the count of table entries.
 *
 * @return TestCase
 */
function assert_database_count($table, int $count, ?string $connection = null)
{
    return test()->assert_database_count(...func_get_args());
}
/**
 * Assert the given record has been "soft deleted".
 *
 * @param  Model|string  $table
 * @return TestCase
 */
function assert_soft_deleted($table, array $data = [], ?string $connection = null, string $deleted_at_column = 'deleted_at')
{
    return test()->assert_soft_deleted(...func_get_args());
}
/**
 * Assert the given record has not been "soft deleted".
 *
 * @param  Model|string  $table
 * @return TestCase
 */
function assert_not_soft_deleted($table, array $data = [], ?string $connection = null, string $deleted_at_column = 'deleted_at')
{
    return test()->assert_not_soft_deleted(...func_get_args());
}
/**
 * Determine if the argument is a soft deletable model.
 *
 * @param  mixed  $model
 */
function is_soft_deletable_model($model): bool
{
    return test()->is_soft_deletable_model(...func_get_args());
}
/**
 * Get the database connection.
 */
function get_connection(?string $connection = null): Connection
{
    return test()->get_connection(...func_get_args());
}
/**
 * Seed a given database connection.
 *
 * @return TestCase
 */
function seed(array|string $class = 'Database\Seeders\DatabaseSeeder')
{
    return test()->seed(...func_get_args());
}
/**
 * Specify the number of database queries that should occur throughout the test.
 *
 * @return TestCase
 */
function expects_database_query_count(int $excepted, ?string $connection = null)
{
    return test()->expects_database_query_count(...func_get_args());
}
/**
 * Cast a JSON string to a database compatible type.
 *
 * @return TestCase
 */
function cast_as_json(array|object|string $value)
{
    return test()->cast_as_json($value);
}