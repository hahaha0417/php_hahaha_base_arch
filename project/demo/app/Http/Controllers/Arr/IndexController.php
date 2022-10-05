<?php

namespace App\Http\Controllers\Arr;

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
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use App\Models\accounts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ArticleSubscription;
use App\Models\User;

class IndexController extends BaseController
{


    public function __construct()
    {

    }
    //
    public function index()
    {
        // $array = Arr::add(['name' => 'Desk'], 'price', 100);
        // dd($array);

        // [$keys, $values] = Arr::divide(['name' => 'Desk',
        //     "price" => 100,
        // ]);

        // $array = ['products' => ['desk' => ['price' => 100]],
        //     'products2' => ['desk' => ['price' => 100]],
        // ];

        // $flattened = Arr::dot($array);

        // $array = [100, 200, 300];

        // $first = Arr::first($array, function ($value, $key) {
        //         return $value >= 150;
        //     },
        //     // 100
        // );

        // $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];

        // $flattened = Arr::flatten($array);

        // $array = ['product' => ['name' => null, 'price' => 100]];

        // $contains = Arr::has($array, 'product.name');

        // key 非0連續數字
        // $isAssoc = Arr::isAssoc(['product' => ['name' => 'Desk', 'price' => 100]]);


        // $isAssoc = Arr::isAssoc([1=>1, 2, 3]);

        // $isAssoc = Arr::isList(['product' => ['name' => 'Desk', 'price' => 100]]);

        // $array = [
        //     [['developer' => ['id' => 1, 'name' => 'Taylor']]],
        //     ['developer' => ['id' => 2, 'name' => 'Abigail']],
        // ];

        // $names = Arr::pluck($array, '0.developer.name');

        // $array = ['name' => ['name' => 'Desk'], 'price' => 100];

        // $name = Arr::pull($array, 'name.name');

        // $array = [
        //     ['name' => 'Desk'],
        //     ['name' => 'Table'],
        //     ['name' => 'Chair'],
        // ];

        // $eee = Arr::sort($array, function ($value) {
        //     return $value['name'];
        // });

        // $sorted = array_values(Arr::sort($array, function ($value) {
        //     return $value['name'];
        // }));

        // $array = [
        //     ['Roman', 'Taylor', 'Li'],
        //     ['PHP', 'Ruby', 'JavaScript'],
        //     ['one' => 1, 'two' => 2, 'three' => 3],
        // ];

        // $sorted = Arr::sortRecursive($array);

        // $array = [100, '200', 300, '400', 500];

        // $filtered = Arr::where($array, function ($value, $key) {
        //     return is_string($value);
        // });
        // dd($filtered);


        // // 已有值不會修改
        // $data = ['products' => ['desk' => ['price' => 100]]];

        // data_fill($data, 'products.desk.price', 200);

        // // ['products' => ['desk' => ['price' => 100]]]

        // data_fill($data, 'products.desk.discount', 10);

        // $collection = collect([1, 2, 3]);
        // $eee = $collection->min();

        // Collection::macro('toUpper', function () {
        //     return $this->map(function ($value) {
        //         return Str::upper($value);
        //     });
        // });

        // $collection = collect(['first', 'second']);

        // $upper = $collection->toUpper();

        // $collection = str_split('AABBCCCD');

        // $collection = collect(str_split('AABBCCCD'));

        // $chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
        //     return $value === $chunk->last();
        // });

        // $chunks->all();

        // $collection = collect([
        //     ['product' => 'Desk', 'price' => 200],
        //     ['product' => 'Chair', 'price' => 100],
        // ]);

        // $rrr = $collection->contains('product', 'Bookcase');

        // $employees = collect([
        //     ['email' => 'abigail@example.com', 'position' => 'Developer'],
        //     ['email' => 'james@example.com', 'position' => 'Designer'],
        //     ['email' => 'victoria@example.com', 'position' => 'Developer'],
        // ]);

        // // 沒給會填充 key，超過key + value數會出錯
        // $collection = collect([["44", 'John Doe', 35, 3], ['Jane Doe', 33]]);

        // $rrr = $collection->eachSpread(function ($name, $age, $ere, $www) {
        //     $eee = 0;
        // });

        // $lazyCollection = LazyCollection::times(INF)
        // ->takeUntilTimeout(now()->addMinute());

        // $lazyCollection->each(function ($number) {
        //     dump($number);

        //     sleep(1);
        // });

        // // 没有任何输出
        // $lazyCollection = LazyCollection::times(INF)->tapEach(function ($value) {
        //     dump($value);
        // });

        // // 打印出三条数据
        // $array = $lazyCollection->take(3)->all();

        // $disk = Storage::build([
        //     'driver' => 'local',
        //     'root' => '/path/to/root',
        // ]);

        // $rrr = storage_path("asset");

        // echo asset('storage/file.txt');
        // $rrr = 0;

        // ---------------------------------------------------------------
        // 通知
        // ---------------------------------------------------------------
        // https://vocus.cc/article/62851198fd897800011dc3bc
        // $user = (new accounts)->find(1);
        // $when = now()->addMinutes(10);
        // $user->email = "hahaha0417@hotmail.com";
        // $user->notify((new ArticleSubscription())->delay($when));
        // ---------------------------------------------------------------













        return 444;
    }




}
