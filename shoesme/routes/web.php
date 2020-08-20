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

Route::get('',['uses'=>'HomePageController@index','as'=>'index']);
Route::view('/about','about');
Route::view('/contact','contact');
Route::group(['prefix'=>'back'],function(){
	Route::get('',['uses'=>'Admin\DashboardController@index','as'=>'index']);
});