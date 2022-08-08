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

        return "444";

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
