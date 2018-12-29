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


Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/users', 'UserController@index');
//Route::get('/portfolios', 'UserController@index')->name('portfolios');
Route::post('/users/create', 'UserController@store')->name('user.store');
Route::get('/users/{user}', 'UserController@show')->name('user.show');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/profil', 'UserController@show')->name('profil');
    Route::get('/profil/edit', 'UserController@edit')->name('user.edit');
    Route::put('/profil/update', 'UserController@update')->name('user.update');
    Route::get('/home', 'HomeController@index')->name('home');
});
