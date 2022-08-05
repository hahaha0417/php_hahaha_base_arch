<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Base\Controller as BaseController;
use hahaha\view\table\projects\index as table_index;
use hahaha\view\table\projects\edit as table_edit;
use hahaha\parameter\parameter as parameter;
use hahaha\define\key;
use hahaha\view\fsm as view_fsm;

/*

use App\Http\Controllers\Backend\FsmController as FsmController;
use App\Http\Controllers\Backend\FsmController as Backend_FsmController;

*/

class FsmController extends BaseController
{
    // 後台首頁
    public function fsm(Request $request)
    {
        $view_fsm = view_fsm::instance();
        // -----------------------------------------
        //
        // -----------------------------------------
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->name = "";
        $parameter->page->type = key::FSM;
        $parameter->page->title = key::HAHAHA . " " . key::FSM;

        $parameter->table = new \stdClass;

        // -----------------------------------------
        //  這樣即可，不用laravel view
        // -----------------------------------------
        return $view_fsm->view();

    }


}
