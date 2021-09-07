<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {

    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/useraccount','UserController@index');
Route::post('/save','UserController@store');

Route::get('/list','UserController@show');

Route::get('delete/{id}','UserController@delete');

Route::get('/edit/{id}','UserController@edit');

Route::post('/update','UserController@updatestore');
//For Banner
Route::get('/banner','BannerController@index');
Route::post('/Save','BannerController@small_store');
Route::get('/show','BannerController@small_show');
Route::get('/small_delete/{id}','BannerController@small_delete');
Route::get('/small_edit/{id}','BannerController@small_edit');
Route::post('/small_update','BannerController@small_updateStore');
//category

Route::get('/category','CategoryController@index');
Route::post('/cat_Store','CategoryController@store');
Route::get('/cat_show','CategoryController@show');
Route::get('/destroy/{id}','CategoryController@destroy');
Route::get('/cat_edit/{id}','CategoryController@edit');
Route::post('/cat_update','CategoryController@update');
//product
Route::get('/product','ProductController@index');
Route::post('/store','ProductController@store');
Route::get('/items','ProductController@show');
Route::get('/product_delete/{id}','ProductController@product_delete');
Route::get('/product_edit/{id}','ProductController@product_edit');
Route::post('/product_update','ProductController@product_update');
//productImage
Route::get('/productimage','ImageController@index');
Route::post('/Store','ImageController@image_store');
Route::get('/images','ImageController@image_show');
Route::get('/image_delete/{id}','ImageController@image_delete');
Route::get('/image_edit/{id}','ImageController@image_edit');
Route::post('/image_updateStore','ImageController@image_updateStore');