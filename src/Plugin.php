<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Foundation\Testing\Concerns\Interacts_With_Deprecation_Handling;
use Illuminate\Foundation\Testing\Concerns\Interacts_With_Exception_Handling;
use Pest\Contracts\Plugins\Handles_Arguments;
use Pest\Plugins\Concerns\Handle_Arguments;
use Pest\Test_Suite;
use Php_Unit\Framework\Test_Case;
/**
 * @internal
 */
final class Plugin implements Handles_Arguments
{
    use Handle_Arguments;
    public function handle_arguments(array $arguments): array
    {
        if ($this->has_argument('--with-exception-handling', $arguments)) {
            $arguments = $this->pop_argument('--with-exception-handling', $arguments);
            $interacts_with_exception_handling = fn(Test_Case $test_case): bool => function_exists('trait_uses_recursive') && trait_uses_recursive($test_case, Interacts_With_Exception_Handling::class);
            uses()->before_each(function () use ($interacts_with_exception_handling): void {
                /** @var TestCase $this */
                if ($interacts_with_exception_handling($this)) {
                    /** @var TestCase&InteractsWithExceptionHandling $this */
                    $this->with_exception_handling();
                }
            })->in(Test_Suite::get_instance()->root_path);
        }
        if ($this->has_argument('--without-exception-handling', $arguments)) {
            $arguments = $this->pop_argument('--without-exception-handling', $arguments);
            $interacts_with_exception_handling = fn(Test_Case $test_case): bool => function_exists('trait_uses_recursive') && trait_uses_recursive($test_case, Interacts_With_Exception_Handling::class);
            uses()->before_each(function () use ($interacts_with_exception_handling): void {
                /** @var TestCase $this */
                if ($interacts_with_exception_handling($this)) {
                    /** @var TestCase&InteractsWithExceptionHandling $this */
                    $this->without_exception_handling();
                }
            })->in(Test_Suite::get_instance()->root_path);
        }
        if ($this->has_argument('--with-deprecation-handling', $arguments)) {
            $arguments = $this->pop_argument('--with-deprecation-handling', $arguments);
            $interacts_with_deprecation_handling = fn(Test_Case $test_case): bool => function_exists('trait_uses_recursive') && trait_uses_recursive($test_case, Interacts_With_Deprecation_Handling::class);
            uses()->before_each(function () use ($interacts_with_deprecation_handling): void {
                /** @var TestCase $this */
                if ($interacts_with_deprecation_handling($this)) {
                    /** @var TestCase&InteractsWithDeprecationHandling $this */
                    $this->with_deprecation_handling();
                }
            })->in(Test_Suite::get_instance()->root_path);
        }
        if ($this->has_argument('--without-deprecation-handling', $arguments)) {
            $arguments = $this->pop_argument('--without-deprecation-handling', $arguments);
            $interacts_with_deprecation_handling = fn(Test_Case $test_case): bool => function_exists('trait_uses_recursive') && trait_uses_recursive($test_case, Interacts_With_Deprecation_Handling::class);
            uses()->before_each(function () use ($interacts_with_deprecation_handling): void {
                /** @var TestCase $this */
                if ($interacts_with_deprecation_handling($this)) {
                    /** @var TestCase&InteractsWithDeprecationHandling $this */
                    $this->without_deprecation_handling();
                }
            })->in(Test_Suite::get_instance()->root_path);
        }
        return $arguments;
    }
}