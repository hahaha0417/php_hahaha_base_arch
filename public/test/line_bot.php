<?php


use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;

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



//設定Token 
$ChannelSecret = '1081b6def11946694aab7bfed727f034'; 
$ChannelAccessToken = 'kFBlHveOiDdmHIy+HrDRQchwESqq8HClLXjXa5Mf2EGel8nZJwyRGZX1XQ1gYV1C/mOW0nO3Bt2kQrwWRrRq6KBjxGaTQj+jhiWleHfnh5DL2rSsYsN81s/e1yLF88u/E16neikfpK02HKU+n8JM2wdB04t89/1O/w1cDnyilFU='; 
 
//讀取資訊 
$HttpRequestBody = file_get_contents('php://input'); 
$HeaderSignature = $_SERVER['HTTP_X_LINE_SIGNATURE']; 
 
//驗證來源是否是LINE官方伺服器 
$Hash = hash_hmac('sha256', $HttpRequestBody, $ChannelSecret, true); 
$HashSignature = base64_encode($Hash); 
if($HashSignature != $HeaderSignature) 
{ 
    die('hash error!'); 
} 
 
//輸出 
file_put_contents('C:\Users\FAMILY1234\Desktop\aaa.txt', $HttpRequestBody);



