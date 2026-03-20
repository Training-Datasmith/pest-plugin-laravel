<?php

declare (strict_types=1);
namespace Pest\Laravel;

/**
 * Freeze time.
 *
 * @param  callable|null  $callback
 * @return mixed
 */
function freeze_time($callback = null)
{
    return test()->freeze_time($callback);
}
/**
 * Freeze time at the beginning of the current second.
 *
 * @param  callable|null  $callback
 * @return mixed
 */
function freeze_second($callback = null)
{
    return test()->freeze_second($callback);
}
/**
 * Begin travelling to another time.
 *
 * @param  int  $value
 * @return \Illuminate\Foundation\Testing\Wormhole
 */
function travel($value)
{
    return test()->travel(...func_get_args());
}
/**
 * Travel to another time.
 *
 * @param  \DateTimeInterface|\Closure|\Illuminate\Support\Carbon|string|bool|null  $date
 * @param  callable|null  $callback
 * @return mixed
 */
function travel_to($date, $callback = null)
{
    return test()->travel_to(...func_get_args());
}
/**
 * Travel back to the current time.
 *
 * @return \DateTimeInterface
 */
function travel_back()
{
    return test()->travel_back(...func_get_args());
}