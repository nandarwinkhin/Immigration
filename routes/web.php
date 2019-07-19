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
Route::get('/insert','InsertController@index');
Route::post('/insert','InsertController@insert');
Route::get('/person',function (){
    return view('person');
});
Route::get('/detail',function(){
    return view('detail');
});
Route::get('update',function(){
    return view('update');
});
Route::get('/insert/{id}','InsertController@search');

