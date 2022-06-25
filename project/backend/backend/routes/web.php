<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\IndexController as BackendIndexController;

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
 
Route::prefix('backend')
    ->namespace('\App\Http\Controllers\Backend')
    ->middleware([
        // '',
    ])->group(function () {
    Route::get('/', 'AccountsController@Index');
    Route::get('/accounts', 'AccountsController@index');
    Route::get('/accounts/{method}', 'AccountsController@add');
    Route::get('/accounts/id/{id}/{method}', 'AccountsController@edit');
});