<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Pest\Expectation;
/*
 * Asserts that the value is an instance of \Illuminate\Support\Collection
 */
expect()->extend(
    'toBeCollection',
    // @phpstan-ignore-next-line
    fn(): Expectation => $this->to_be_instance_of(\Illuminate\Support\Collection::class)
);