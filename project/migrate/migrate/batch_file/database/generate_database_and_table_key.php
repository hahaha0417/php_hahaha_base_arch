<?php

use hahahalib\pdo as pdo;
use hahahalib\generate_const_database as generate_const_database;
use hahahalib\generate_const_table as generate_const_table;

require __DIR__.'/../../vendor/autoload.php';



// --------------------------------------------------------------------------
// hahaha 初始化
// --------------------------------------------------------------------------
hahaha\application::instance()
    ->initial()
    ->initial_web();
// --------------------------------------------------------------------------
// 
// --------------------------------------------------------------------------


$database = "table_tw";


$pdo = pdo::instance();
// ---------------------------------------------------------- 
$result = [];
$pdo->Get_Tables($database, $result);

// 簡易移除
unset($result["migrations"]);
unset($result["personal_access_tokens"]);

$tables = &$result;

unset($result);


// ---------------------------------------------------------- 
$result = [];
// $pdo->Get_Table_Fields($database, "accounts", $result);

// unset($result);
// ---------------------------------------------------------- 
$pdo->Get_Tables_Fields($database, $tables, $result);

$table_fields = &$result;

unset($result);
// ---------------------------------------------------------- 

// ---------------------------------------------------------- 
$path_code = realpath(__DIR__ . '/../../../../../code');
// ---------------------------------------------------------- 
$path = $path_code . "/" . "generate";
if(!is_dir($path))
{
    mkdir($path, 0777, true);
}
// ---------------------------------------------------------- 
$path = $path_code . "/" . "generate" . "/" . "define";
if(!is_dir($path))
{
    mkdir($path, 0777, true);
}
// ---------------------------------------------------------- 
$path = $path . "/" . "database";
if(!is_dir($path))
{
    mkdir($path, 0777, true);
}
$path_db = $path;
$file_db = $path . "/database.php";
// ---------------------------------------------------------- 
$path = $path . "/" . "table";
if(!is_dir($path))
{
    mkdir($path, 0777, true);
}
$path_db_table = $path;
// ---------------------------------------------------------- 


$generate_const_database = generate_const_database::Instance()->Initial();
$generate_const_table = generate_const_table::Instance()->Initial();

$generate_const_database->Generate($file_db, $tables, "hahaha\\define", "database");

$generate_const_table->Generate($path_db_table, $table_fields, "hahaha\\define");
 