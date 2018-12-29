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
<<<<<<< HEAD
Route::post('/users/create', 'UserController@store')->name('user.store');

Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/users/{user}', 'UserController@show')->name('user.show');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::put('/users/{user}/update', 'UserController@update')->name('user.update');
=======
Route::get('/portfolios', 'UserController@index')->name('portfolios');

Route::get('/users/{user}', 'UserController@show')->name('user.show');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/profil', 'UserController@show')->name('profil');
    Route::get('/profil/edit', 'UserController@edit')->name('user.edit');
    Route::put('/profil/update', 'UserController@update')->name('user.update');
>>>>>>> 6d68a4524939b01d2182e39398aeb5eb5025be43
    Route::get('/home', 'HomeController@index')->name('home');
});
