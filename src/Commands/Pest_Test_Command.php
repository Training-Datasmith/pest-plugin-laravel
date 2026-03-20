<?php

declare (strict_types=1);
namespace Pest\Laravel\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Prompts_For_Missing_Input;
use Illuminate\Support\Facades\File;
use function Laravel\Prompts\select;
use Pest\Support\Str;
use function Pest\Test_Directory;
use Pest\Test_Suite;
use Symfony\Component\Console\Input\Input_Interface;
use Symfony\Component\Console\Output\Output_Interface;
/**
 * @internal
 */
final class Pest_Test_Command extends Command implements Prompts_For_Missing_Input
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'pest:test {name : The name of the file} {--unit : Create a unit test} {--dusk : Create a Dusk test} {--test-directory=tests : The name of the tests directory} {--force : Overwrite the existing test file with the same name}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new test file';
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        /** @var string $testDirectory */
        $test_directory = $this->option('test-directory');
        Test_Suite::get_instance(base_path(), $test_directory);
        /** @var string $name */
        $name = $this->argument('name');
        if (str_ends_with($name, '.php')) {
            $name = substr($name, 0, -4);
        }
        $type = (bool) $this->option('unit') ? 'Unit' : ((bool) $this->option('dusk') ? 'Browser' : 'Feature');
        $relative_path = sprintf(test_directory('%s/%s.php'), $type, ucfirst($name));
        $target = base_path($relative_path);
        if (!File::is_directory(dirname((string) $target))) {
            File::make_directory(dirname((string) $target), 0777, true, true);
        }
        if (File::exists($target) && !(bool) $this->option('force')) {
            $this->components->warn(sprintf('[%s] already exist', $target));
            return 1;
        }
        $contents = File::get(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__, 3), 'pest', 'stubs', sprintf('%s.php', $type)]));
        $name = mb_strtolower($name);
        $name = Str::ends_with($name, 'test') ? mb_substr($name, 0, -4) : $name;
        File::put($target, str_replace('{name}', $name, $contents));
        $message = sprintf('[%s] created successfully.', $relative_path);
        $this->components->info($message);
        return 0;
    }
    protected function prompt_for_missing_arguments_using()
    {
        return ['name' => 'What should the test be named?'];
    }
    /**
     * Interact further with the user if they were prompted for missing arguments.
     */
    protected function after_prompting_for_missing_arguments(Input_Interface $input, Output_Interface $output): void
    {
        $type = select('Which type of test would you like?', ['feature' => 'Feature', 'unit' => 'Unit', 'dusk' => 'Dusk']);
        match ($type) {
            'feature' => null,
            'unit' => $input->set_option('unit', true),
            'dusk' => $input->set_option('dusk', true),
        };
    }
}