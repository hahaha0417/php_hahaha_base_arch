<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
//
use hahaha\define\job\job_work as job_work;

class JobWork implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $stage = null;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($stage)
    {
        $this->stage = $stage;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $stage_next = null;
        if($this->stage == job_work::WORK_START)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 開始\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_STAGE_1;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_STAGE_1)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 舞台 - 1\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_STAGE_2;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_STAGE_2)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 舞台 - 2\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_STAGE_3;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_STAGE_3)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 舞台 - 3\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_STAGE_4;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_STAGE_4)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 舞台 - 4\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_STAGE_5;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_STAGE_5)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 舞台 - 5\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_END;
            echo "------------------------------------------------\n";

        }
        else if($this->stage == job_work::WORK_END)
        {
            echo "\n";
            echo "------------------------------------------------\n";
            echo "工作 - 結束\n";
            echo "------------------------------------------------\n";
            // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            echo "OK\n";
            echo "------------------------------------------------\n";
            $stage_next = job_work::WORK_IDLE;
            echo "------------------------------------------------\n";

        }
        else
        {
            // echo "\n";
            // echo "------------------------------------------------\n";
            // echo "工作 - 無\n";
            // echo "------------------------------------------------\n";
            // // 防呆 & 判斷邏輯都在裡面處理，這裡用字串表示
            // echo "OK\n";
            // echo "------------------------------------------------\n";

            // echo "------------------------------------------------\n";
            return;
        }
        //
        if($stage_next != null)
        {
            JobWork::dispatch($stage_next);
        }
        else
        {

        }


    }
}
