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
    return view('font/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/infoList',  ['middleware'=> ['auth'] ,'uses'=> 'InfoController@getList']);
Route::get('/detail', ['middleware'=> 'auth', 'uses'=> 'InfoController@detail']);
Route::get('/add', ['middleware'=> 'auth', 'uses'=> 'InfoController@add']);
Route::post('/newInfo', ['middleware'=> 'auth', 'uses'=> 'InfoController@newInfo']);
Route::post('/updated', ['middleware'=> 'auth', 'uses'=> 'InfoController@updated']);
Route::get('/delete', ['middleware'=> 'auth', 'uses'=> 'InfoController@delete']);
Route::get('/update', ['middleware'=> 'auth', 'uses'=> 'InfoController@update']);