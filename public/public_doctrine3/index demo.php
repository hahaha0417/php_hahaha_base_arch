<?php

use hahahalib\function_base as function_base;
use hahaha\define\key as define_key;
use hahaha\api\api\table as api_table;
use hahaha\define\backend\api as backend_api;
use hahaha\config\table as config_table;


require __DIR__ . "/../../project/doctrine3/doctrine3/vendor/autoload.php";


// --------------------------------------------------------------------------
// hahaha 初始化
// --------------------------------------------------------------------------
hahaha\application::instance()
    ->initial()
    ->initial_web();
// --------------------------------------------------------------------------
// 
// --------------------------------------------------------------------------
 
echo 444;

