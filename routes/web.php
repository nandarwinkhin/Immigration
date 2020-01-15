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



Route::get('/person',function (){
    return view('person');
});
Route::get('/detail',function(){
    return view('detail');
});
Route::get('update',function(){
    return view('update');
});
// Route::get('/',function(){
//     return view('home');
// });

// Route::get('/users/register','Auth\RegisterController@show');
// Route::post('/users/register','Auth\RegisterController@register');
// Route::get('/','Auth\LoginController@show');
// Route::post('/','Auth\LoginController@login');
// Route::get('/users/logout','Auth\LoginController@logout');
Route::get('insert','InsertController@index');
Route::post('insert','InsertController@store');  
Route::get('search','SearchController@index');
Route::post('search','SearchController@search');
Route::get('direct','SearchController@direct');
Route::get('newInsert',function(){
    return 'Successfully';
});
// Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'),function(){
// Route::get('insert','InsertController@index');
// Route::post('insert','InsertController@store');  
// Route::get('search','SearchController@index');
// Route::post('search','SearchController@search');
// });
