<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Base\Controller as BaseController;
use hahaha\view\table\projects\index as table_index;
use hahaha\view\table\projects\edit as table_edit;
use hahaha\parameter\parameter as parameter;
use hahaha\define\key;
use hahaha\view\chat as view_chat;

/*

use App\Http\Controllers\Backend\ChatController as ChatController;
use App\Http\Controllers\Backend\ChatController as Backend_ChatController;

*/

class ChatController extends BaseController
{
    // 後台首頁
    public function chat(Request $request)
    {
        $view_chat = view_chat::instance();
        // -----------------------------------------
        //
        // -----------------------------------------
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->name = "";
        $parameter->page->type = key::CHAT;
        $parameter->page->title = key::HAHAHA . " " . key::CHAT;

        $parameter->table = new \stdClass;

        // -----------------------------------------
        //  這樣即可，不用laravel view
        // -----------------------------------------
        return $view_chat->view();

    }


}
