<?php

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
//Register, login, logout
Route::get('login','LogController@getLogin');
Route::post('login','LogController@postLogin');
Route::get('register','LogController@getRegister');
Route::post('register','LogController@postRegister');
Route::get('logout','LogController@Logout');
Route::get('homepage','PagesController@Homepage');