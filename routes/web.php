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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('/member_create', 'HomeController@member_create');
Route::any('/member_save', 'HomeController@member_save');

Route::any('/member_update/{id}',['uses'=>'HomeController@member_update']);
Route::any('/member_detail/{id}',['uses'=>'HomeController@member_detail']);
Route::any('/member_delete/{id}',['uses'=>'HomeController@member_delete']);

Route::any('/member_test', 'HomeController@member_test');
