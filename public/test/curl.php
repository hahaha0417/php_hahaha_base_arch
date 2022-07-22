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
$curl = \hahahalib\curl::Instance()->Initial();
$data = [];
$options = [];
$result = $curl->Post("https://www.php.net/manual/en/function.curl-exec.php", $data, $options);

$rrr = 0;

// $result = [
//     "aa" => "aa",
//     "bb" => "bb",
// ];
// echo json_encode($result, 
//     JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
// );

// mihaeu/html-formatter
// composer require mihaeu/html-formatter

// paquettg/php-html-parser
// composer require paquettg/php-html-parser





 
$dom = new Dom;
$dom = $dom->loadStr('<div class="all"><p>Hey bro, <a class="aa" href="google.com">click here</a><br /> :)</p></div>');
$a = $dom->find('.aa')[0];
// echo $a->text; // "click here"
// echo $a->outerHtml;
$rrr = 0;
echo \Mihaeu\HtmlFormatter::format($a->outerHtml); 

$rrr = 0;


$rrr = 0;


