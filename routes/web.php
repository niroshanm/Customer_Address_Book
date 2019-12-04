<?php

use App\Http\Controllers\CustomerController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get/customer', 'ArticleController@show');
Route::get('/get/customer/{id}', 'ArticleController@index');
Route::post('/create/customer','CustomerController@store');
Route::get('/edit/customer/{id}','CustomerController@edit');
Route::post('/edit/customer/{id}','CustomerController@update');
Route::delete('/delete/customer/{id}','CustomerController@delete');
