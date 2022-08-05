<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use hahaha\define\job\job_work as job_work;

class JobWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:work';

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
        \App\Jobs\JobWork::dispatch(job_work::WORK_START);
        return 0;
    }
}
