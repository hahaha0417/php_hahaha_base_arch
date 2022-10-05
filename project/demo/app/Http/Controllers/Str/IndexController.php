<?php

namespace App\Http\Controllers\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Orm\Controller as BaseController;
//
use LaravelDoctrine\ORM\Facades\EntityManager;
use LaravelDoctrine\ORM\Facades\Registry;
use LaravelDoctrine\ORM\Facades\Doctrine;
//
use Doctrine\ORM\Query\ResultSetMapping;

use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\accounts;
use Illuminate\Support\Facades\DB;


class IndexController extends BaseController
{


    public function __construct()
    {

    }
    //
    public function index()
    {
        // $length = Str::length('Laravel');
        // dd($length);

        // $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20);
        // dd($truncated);

        // $result = Str::substrReplace('1300', ':', 2);
        // // 13:

        // $result = Str::substrReplace('1300', ':', 2, 0);
        // // 13:00

        // $string = Str::of('/foo/bar/baz')->dirname(4);

        // $excerpt = Str::of('This is my name xxx')->excerpt('name', [
        //     'radius' => 3,
        //     'omission' => '(...) '
        // ]);

        // $result = Str::of('This is my name ')->endsWith('name');












        return 444;
    }




}
