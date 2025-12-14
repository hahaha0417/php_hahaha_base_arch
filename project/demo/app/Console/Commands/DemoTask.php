<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DemoTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo scheduled task that logs a timestamp';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $message = sprintf("demo:task executed at %s", now());
        // write to laravel log
        Log::info($message);
        // also write a small file for quick verification
        file_put_contents(storage_path('logs/schedule_demo.log'), $message.PHP_EOL, FILE_APPEND);
        $this->info($message);

        return self::SUCCESS;
    }
}
