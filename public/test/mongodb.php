<?php

use hahahalib\function_base as function_base;
use hahaha\define\key as define_key;
use hahaha\api\api\table as api_table;
use hahaha\define\backend\api as backend_api;
// use hahaha\config\table as config_table;
use PHPHtmlParser\Dom;

require __DIR__ . "/../../project/backend/backend/vendor/autoload.php";

// 統一寫在這，進行加鎖
// 不容易錯亂

// phpinfo();

// --------------------------------------------------------------------------
// hahaha 初始化
// --------------------------------------------------------------------------
\hahaha\application::instance()
    ->initial()
    ->initial_web();
// config_table::instance() 
//     ->initial();
// --------------------------------------------------------------------------
// 
// -------------------------------------------------------------------------- 

$collection = (new \MongoDB\Client("mongodb://127.0.0.1:27017/"))->test->users;

$insertOneResult = $collection->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());


$rrr = 0;