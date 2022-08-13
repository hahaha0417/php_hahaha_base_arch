<?php

namespace App\Http\Controllers\Orm;

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

class IndexController extends BaseController
{


    public function __construct()
    {

    }
    //
    public function index()
    {
        // $rrr = accounts::all();
        // foreach ($rrr as $flight) {
        //     echo $flight->name;
        // }

        // $flights = accounts::where('id', 1)
        //     ->orderBy('name')
        //     ->take(10)
        //     ->get();

        // // fresh 方法将从数据库中重新检索模型。现有模型实例不会受到影响：
        // $flight = Flight::where('number', 'FR 900')->first();

        // $freshFlight = $flight->fresh();

        // // refresh 方法会使用数据库中的新数据重新赋值现有的模型。此外，已经加载的关系也会被重新加载：
        // $flight = Flight::where('number', 'FR 900')->first();

        // $flight->number = 'FR 456';

        // $flight->refresh();

        // $flight->number; // "FR 900"

        // // https://learnku.com/docs/laravel/9.x/collections/12225#method-reject
        // $collection = collect([1, 2, 3, 4]);

        // $filtered = $collection->reject(function ($value, $key) {
        //     return $value > 2;
        // });

        // $filtered->all();

        // // [1, 2]

        // // 结果分块 200個一次
        // accounts::chunk(200, function ($flights) {
        //     foreach ($flights as $flight) {
        //         // TODO
        //         $rrr = 0;
        //     }
        // });

        // // 如果要根据一个字段来过滤「chunk」方法拿到的数据，同时，这个字段的数据在遍历的时候还需要更新的话，那么可以使用「chunkById」方法。在这种场景下如果使用「chunk」方法的话，得到的结果可能和预想中的不一样。在「chunkById」 方法的内部，默认会查询 id 字段大于前一个分块中最后一个模型的 id。
        // accounts::where('departed', true)
        // ->chunkById(200, function ($flights) {
        //     $flights->each->update(['departed' => false]);
        // }, $column = 'id');

        // Flight::where('departed', true)
        // ->lazyById(200, $column = 'id')
        // ->each->update(['departed' => false]);


        // foreach (Flight::where('destination', 'Zurich')->cursor() as $flight) {
        //     //
        // }

        // 如果要处理大量 Eloquent 记录，请考虑使用 lazy 方法


        // $flight = accounts::find(1);





        return 444;
    }




}
