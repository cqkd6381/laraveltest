<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'user'], function () {
    Route::any('index','UserController@index')->name('index');
	Route::any('create','UserController@create')->name('create');
	Route::any('store','UserController@store')->name('store');
	Route::any('delete/{id}','UserController@delete')->name('delete');
});

Route::get('api/users/{user}', function (App\User $user) {
//    return $user->email;
    dd($user);
});
Route::any('test/{id}',function($id){
    header('Access-Control-Allow-Origin: *');
    return $id;
});