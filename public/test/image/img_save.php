<?php


use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;

$time_start = microtime(true);

require __DIR__ . "/../../../project/backend/backend/vendor/autoload.php";

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

function base64_encode_image ($filename, $filetype) {
    if ($filename) {
        // $imgbinary = fread(fopen($filename, "r"), filesize($filename));
		$imgbinary = file_get_contents($filename);
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }
}

// -------------------------------------- 
$stream = base64_encode_image ('./iTW.png','png');

$img = str_replace('data:image/png;base64,', '', $stream);
$data = base64_decode($img);

$success = file_put_contents('./iTW1.png', $data);
// -------------------------------------- 

// -------------------------------------- 
$stream = base64_encode_image ('./iTW.jpeg','jpeg');

$img = str_replace('data:image/jpeg;base64,', '', $stream);
$data = base64_decode($img);

$success = file_put_contents('./iTW1.jpeg', $data);
// -------------------------------------- 





