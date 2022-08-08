<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test {number} {--id=*} --queue';

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
        $data = [];
        event(new \App\Events\PostCreated($data));
        // echo $this->argument('number');

        // $this->info('The command was successful!');


        // number
        // dd($this->argument());
        // id
        //dd($this->options());

        //if ($this->confirm('Do you wish to continue?'))
        {
            //
        }

        // Cache::remember('thumb-'.$hash, 15, function() {
        //     $image = Image::where('hash', $hash)->first();
        // });

        // Route::post('/user/{user}/mail', function ($user) {
        //     $exitCode = Artisan::call('mail:send', [
        //         'user' => $user, '--queue' => 'default'
        //     ]);

        //     //
        // });



        // Collection::macro('toUpper', function () {
        //     return $this->map(function ($value) {
        //         return Str::upper($value);
        //     });
        // });

        // $collection = collect(['first', 'second']);

        // $upper = $collection->toUpper();

        // ['FIRST', 'SECOND']

        // $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        //     return strtoupper($name);
        // })->reject(function ($name) {
        //     return empty($name);
        // });

        return 0;
    }
}
