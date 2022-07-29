<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Base\Controller as BaseController;
use hahaha\view\table\projects\index as table_index;
use hahaha\view\table\projects\edit as table_edit;
use hahaha\parameter\parameter as parameter;
use hahaha\define\key;
use hahaha\view\chart as view_chart;

/*

use App\Http\Controllers\Backend\ChartController as ChartController;
use App\Http\Controllers\Backend\ChartController as Backend_ChartController;

*/

class ChartController extends BaseController
{
    // 後台首頁
    public function chart(Request $request)
    {
        $view_chart = view_chart::instance();
        // -----------------------------------------
        //
        // -----------------------------------------
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->name = "";
        $parameter->page->type = key::CHART;
        $parameter->page->title = key::HAHAHA . " " . key::CHART;

        $parameter->table = new \stdClass;

        // -----------------------------------------
        //  這樣即可，不用laravel view
        // -----------------------------------------
        return $view_chart->view();

    }


}
