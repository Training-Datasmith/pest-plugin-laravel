<?php

declare (strict_types=1);
namespace Pest\Laravel\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use function Pest\Test_Directory;
use Pest\Test_Suite;
/**
 * @internal
 */
final class Pest_Dataset_Command extends Command
{
    /**
     * The Console Command name.
     *
     * @var string
     */
    protected $signature = 'pest:dataset {name : The name of the dataset}
                                         {--test-directory=tests : The name of the tests directory}';
    /**
     * The Console Command description.
     *
     * @var string
     */
    protected $description = 'Create a new dataset file';
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
        $relative_path = sprintf(test_directory('Datasets/%s.php'), ucfirst($name));
        $target = base_path($relative_path);
        if (File::exists($target)) {
            $this->components->warn(sprintf('[%s] already exist', $target));
            return 1;
        }
        if (!File::exists(dirname($relative_path))) {
            File::make_directory(dirname($relative_path));
        }
        $contents = File::get(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__, 3), 'pest', 'stubs', 'Dataset.php']));
        $name = mb_strtolower($name);
        $contents = str_replace('{dataset_name}', $name, $contents);
        $element = Str::singular($name);
        $contents = str_replace('{dataset_element}', $element, $contents);
        File::put($target, str_replace('{dataset_name}', $name, $contents));
        $message = sprintf('[%s] created successfully.', $relative_path);
        $this->components->info($message);
        return 0;
    }
}