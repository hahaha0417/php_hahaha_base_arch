<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Test\Controller as BaseController;
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
use App\Events\PostCreated;
use App\Listeners\NotifyUser;
use Illuminate\Support\Facades\Event;

class IndexController extends BaseController
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        // $this->em = $em->getManager('otherConnection');
    }
    //
    public function index()
    {
        // $sql = "";
        // $rsm = new ResultSetMapping();
        // $query = EntityManager::createNativeQuery($sql, $rsm);
        // // $em = app('em')->createNativeQuery($sql, $rsm);

        // ---------------------------------------------------------------
        // $response = Http::get('http://example.com');
        // ---------------------------------------------------------------

        // --------------------------------------------------
        // 這兩者相同
        // $article = EntityManager::find('Accounts', 1);
        // $article->setName('Different title');

        // $article2 = EntityManager::find('Accounts', 1);

        // if ($article === $article2) {
        //     echo "Yes we are the same!";
        // }
        // EntityManager::flush();
        // --------------------------------------------------

        // --------------------------------------------------
        // $article = new \Accounts;
        // $article->setEmail('Let\'s lesisting');
        // $article->setName('Let\' persisting');
        // $article->setPassword('Let\' persisting');

        // EntityManager::persist($article);
        // EntityManager::flush();
        // --------------------------------------------------

        // --------------------------------------------------

        // --------------------------------------------------
        $data = [];

        event(new \App\Events\PostCreated($data));

        abort(500);
        // --------------------------------------------------


        // --------------------------------------------------
        // Collection::macro('toUpper', function () {
        //     return $this->map(function ($value) {
        //         return Str::upper($value);
        //     });
        // });

        // $collection = collect(['first', 'second']);
        // $upper = $collection->toUpper();
        // return $upper;
        // --------------------------------------------------

        return 444;
    }

    public function index_view()
    {
        return view("test.index", []);

    }

    public function index_layout()
    {
        return view("test.index_layout", []);

    }



}
