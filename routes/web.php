<?php

use Illuminate\Support\Facades\Route;

// use App\Imports\FoodImport;
// use App\Exports\GoodsExport;
// use Maatwebsite\Excel\Facades\Excel;

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
//     return view('index');
// });

Route::get('/', 'SiteController@index');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/akcii', 'SiteController@akcii');
Route::get('/catering', 'SiteController@catering');
Route::get('/busket', 'SiteController@busket');

Route::get('/file', 'ExcelController@index')->middleware('admin.user');
Route::get('/export', 'ExcelController@export')->middleware('admin.user');
Route::post('/import', 'ExcelController@import')->middleware('admin.user');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
