<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use hahaha\define\job\job_stop as job_stop;

class JobStop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:stop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \App\Jobs\JobStop::dispatch(job_stop::STOP_START);
        return 0;
    }
}
