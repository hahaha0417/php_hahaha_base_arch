<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Test\IndexController;

use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(
    [
        'namespace' => 'App\Http\Controllers\Test',
        'middleware' => [],
        'prefix' => '/demo'
    ], function () {
        // Route::get('/', function () {
        //     return view('welcome');
        // });

        // 簡易回傳
        Route::get('/', [IndexController::class, 'index']);
        // Route::get('/test', [IndexController::class, 'index']);
        // 簡易畫面
        Route::get('/test_view', [IndexController::class, 'index_view']);
        // 分layout
        Route::get('/test_layout', [IndexController::class, 'index_layout']);
        //
        Route::get('send-mail', [MailController::class, 'index']);
    }
);

// 資源路由
// https://blog.csdn.net/leo_jk/article/details/108160873 *
// https://learnku.com/docs/laravel/9.x/controllers/12212 *
// <meta name="csrf-token" content="{{ csrf_token() }}">
// form 中@csrf



// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::group(
//     [
//         'namespace' => 'App\Http\Controllers\Test',
//         'middleware' => ['test'],
//         'prefix' => '/test'
//     ], function () {
//         // Route::get('/', function () {
//         //     return view('welcome');
//         // });

//         Route::get('/test', [IndexController::class, 'index']);
//         Route::get('/test_view', [IndexController::class, 'index_view']);
//         Route::get('/test_layout', [IndexController::class, 'index_layout']);
//     }
// );
