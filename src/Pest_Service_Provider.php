<?php

declare (strict_types=1);
namespace Pest\Laravel;

use Illuminate\Support\Service_Provider;
use Laravel\Dusk\Console\Dusk_Command;
use Pest\Laravel\Commands\Pest_Dataset_Command;
use Pest\Laravel\Commands\Pest_Dusk_Command;
use Pest\Laravel\Commands\Pest_Test_Command;
final class Pest_Service_Provider extends Service_Provider
{
    /**
     * Register Artisan Commands.
     */
    public function register(): void
    {
        if ($this->app->running_in_console()) {
            $this->commands([Pest_Test_Command::class, Pest_Dataset_Command::class]);
            if (class_exists(Dusk_Command::class)) {
                $this->commands([Pest_Dusk_Command::class]);
            }
        }
    }
}