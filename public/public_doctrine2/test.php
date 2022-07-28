<?php

use hahahalib\function_base as function_base;
use hahaha\define\key as define_key;
use hahaha\api\api\table as api_table;
use hahaha\define\backend\api as backend_api;
use hahaha\config\table as config_table;
use hahaha\config\orm_doctrine as config_orm_doctrine;
use hahahalib\orm_doctrine as orm_doctrine;
use Doctrine\ORM\Query\ResultSetMapping;





require __DIR__ . "/../../project/doctrine2/doctrine2/vendor/autoload.php";


// --------------------------------------------------------------------------
// hahaha 初始化
// --------------------------------------------------------------------------
hahaha\application::instance()
    ->initial()
    ->initial_web();
// --------------------------------------------------------------------------
// 
// --------------------------------------------------------------------------
// https://www.cnblogs.com/yjf512/p/3375614.html 


$config_orm_doctrine = config_orm_doctrine::instance()->Initial_orm_doctrine(realpath(__DIR__ . "/../../project/doctrine2/doctrine2/models"));
$orm_doctrine = orm_doctrine::Instance()->Initial();
// ------------------------------------- 
// 新增
// ------------------------------------- 
// $product = new \Products();
// $product->setCode("ttt");
// $product->setName("ttt");

// $orm_doctrine->Entity_Manager->persist($product);
// $orm_doctrine->Entity_Manager->flush();

// ------------------------------------- 
// 修改
// ------------------------------------- 
// $product = $orm_doctrine->Entity_Manager->find(Products::class, 506);
// $product->setName("vvv");

// $orm_doctrine->Entity_Manager->flush();
// ------------------------------------- 
// 刪除
// ------------------------------------- 
// $product = $orm_doctrine->Entity_Manager->find(Products::class, 506);
// $orm_doctrine->Entity_Manager->remove($product);
// $orm_doctrine->Entity_Manager->flush();
// ------------------------------------- 
// NativeQuery
// ------------------------------------- 

// --------------------
// $rsm = new ResultSetMapping();
// $rsm->addEntityResult('Accounts', 'a');
// $rsm->addFieldResult('a', 'id', 'id');
// $rsm->addFieldResult('a', 'name', 'name');
// // build rsm here
// // --------------------
// $sql = 'SELECT * FROM `accounts` a WHERE a.id = :id';
// $query = $orm_doctrine->Entity_Manager->createNativeQuery($sql, $rsm);
// $query->setParameter("id", 505);
// $query->setParameters([
//     "id" => 505
// ]);
// --------------------
// $sql = 'SELECT * FROM accounts a WHERE a.id = ?';
// $query = $orm_doctrine->Entity_Manager->createNativeQuery($sql, $rsm);
// $query->setParameter(1, 100);
// --------------------
// $test = $query->getArrayResult();
// // $test = $query->getResult();
// // --------------------

// var_dump($test);
// ------------------------------------- 
// Sql
// ------------------------------------- 
// $dql = "SELECT p FROM " . "Products " . "p";
// $query = $orm_doctrine->Entity_Manager->createQuery($dql);
// $query->setFirstResult(0);
// $query->setMaxResults(10);
// $test = $query->getArrayResult();

$qb = $orm_doctrine->Entity_Manager->createQueryBuilder();
$qb->select('p')
   ->from('Products', 'p')
   ->where('p.id = 1');
$query = $qb->getQuery();
$test = $query->getArrayResult();
// 似乎沒有辦法直接用Native SQL，還要寫mapping，所以下不出來用PDO處理
var_dump($test);
echo 444;


// https://stackoverflow.com/questions/6635601/doctrine-limit-syntax-error
// $qb = $em->createQueryBuilder();
// //.. build your query
// $q = $qb->getQuery();
// $q->setFirstResult($offset);
// $q->setMaxResults($limit);
// $result = $q->getResult(); 