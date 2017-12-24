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

Route::get('/testlayout',function(){
	return view('layout.layouts');
});

Route::get('/testhome',function(){
	return view('admin.home_leader');
});
Route::get('createRequest','LeaderController@index')->name('create_request');
