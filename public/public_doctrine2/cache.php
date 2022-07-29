<?php

use hahahalib\function_base as function_base;
use hahaha\define\key as define_key;
use hahaha\api\api\table as api_table;
use hahaha\define\backend\api as backend_api;
use hahaha\config\table as config_table;
use hahaha\config\orm_doctrine as config_orm_doctrine;
use hahahalib\orm_doctrine as orm_doctrine;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Common\Cache\Psr6\DoctrineProvider;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Adapter\ArrayAdapter;



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


// $config_orm_doctrine = config_orm_doctrine::instance()->Initial_orm_doctrine(realpath(__DIR__ . "/../../project/doctrine2/doctrine2/models"));
// $orm_doctrine = orm_doctrine::Instance()->Initial();

// https://www.doctrine-project.org/projects/doctrine-cache/en/2.2/index.html



// $cachePool = new FilesystemAdapter("xxxxxx",0,"d:/eee");
// $cache = DoctrineProvider::wrap($cachePool);
// // $cache instanceof \Doctrine\Common\Cache\Cache
// $cache->save(2333,["4yh4544"], 10000000);
// $rrr = $cache->fetch(2);
// $eeee = 0;



// $cachePool = new ArrayAdapter();
// $cache = DoctrineProvider::wrap($cachePool);
// // $cache instanceof \Doctrine\Common\Cache\Cache
// // $cache->save(2333,["4yh4544"], 10000000);
// $rrr = $cache->fetch(2333);
// $eeee = 0;

