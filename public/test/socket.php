<?php


require __DIR__ . "/../../project/backend/backend/vendor/autoload.php";

// 統一寫在這，進行加鎖
// 不容易錯亂

// phpinfo();

// --------------------------------------------------------------------------
// hahaha 初始化
// --------------------------------------------------------------------------
hahaha\application::instance()
    ->initial()
    ->initial_web();
// config_table::instance()
//     ->initial();
// --------------------------------------------------------------------------
// 
// --------------------------------------------------------------------------

$factory = new \Socket\Raw\Factory();
// $socket = $factory->createClient('www.google.com:80');
$socket = $factory->createClient('127.0.0.1:13000');
echo 'Connected to ' . $socket->getPeerName() . PHP_EOL;

// send simple HTTP request to remote side
$socket->write("GET / HTTP/1.1\r\n\Host: www.google.com\r\n\r\n");

// receive and dump HTTP response
var_dump($socket->read(8192));

$socket->close();
