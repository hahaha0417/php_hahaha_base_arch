<?php

namespace App\Http\Controllers\Backend;
         
use Illuminate\Http\Request;

use App\Http\Controllers\Base\Controller as BaseController;
use hahaha\view\table\index as table_index;
use hahaha\view\table\edit as table_edit;
use hahaha\parameter\parameter as parameter;
use hahaha\define\key;

/*

use App\Http\Controllers\Backend\ProductsSignUpController as ProductsSignUpController;
use App\Http\Controllers\Backend\ProductsSignUpController as Backend_ProductsSignUpController;

*/

class ProductsSignUpController extends BaseController
{
    // 後台首頁
    public function index(Request $request) 
    {
        $view_table_index = table_index::instance();
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->name = "";
        $parameter->page->type = key::INDEX;
        $parameter->page->title = key::HAHAHA . " " . key::INDEX;

        $parameter->table = new \stdClass;
        
        // ----------------------------------------- 
        //  這樣即可，不用laravel view
        // ----------------------------------------- 
        return $view_table_index->view();

    }

    public function add(Request $request) 
    {
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $view_table_edit = table_edit::instance();
        // ----------------------------------------- 
        //  
        // -----------------------------------------  
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->name = "";
        $parameter->page->type = key::ADD;
        $parameter->page->title = key::HAHAHA . " " . key::ADD;
        
        // ----------------------------------------- 
        //  這樣即可，不用laravel view
        // -----------------------------------------      
        return $view_table_edit->view();


    }

    public function edit(Request $request) 
    {
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $view_table_edit = table_edit::instance();
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->type = key::EDIT;
        $parameter->page->title = key::HAHAHA . " " . key::EDIT;
        
        // ----------------------------------------- 
        //  這樣即可，不用laravel view
        // ----------------------------------------- 
        return $view_table_edit->view();

    }

    public function show(Request $request) 
    {
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $view_table_edit = table_edit::instance();
        // ----------------------------------------- 
        //  
        // ----------------------------------------- 
        $parameter = parameter::instance();
        $parameter->page = new \stdClass;
        $parameter->page->type = key::SHOW;
        $parameter->page->title = key::HAHAHA . " " . key::SHOW;
        
        // ----------------------------------------- 
        //  這樣即可，不用laravel view
        // ----------------------------------------- 
        return $view_table_edit->view();

    }
}
