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

Route::group(['prefix' => 'admin'], function() {
    Route::get('home', 'AdminController@index');

});




Route::group(['prefix' => 'users'], function() {
    Route::get('', 'UserController@index');
    Route::post('create', 'UserController@store')->name('user.store');
    Route::get('{user}', 'UserController@show')->name('user.show');
});



/**
 *  All routes require auth's middleware  
 */
Route::group(['middleware'=>'auth'],function(){
    
    Route::group(['prefix' => 'profile'], function() {
        Route::get('', 'UserController@profile')->name('profile');
        Route::get('edit', 'UserController@edit')->name('profile.edit');
        Route::put('edit', 'UserController@update')->name('profile.update');
    });
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/home', 'ProjectController@store')->name('home');
});

Route::resource('project', 'ProjectController');
Route::resource('category', 'CategoryController');
Route::resource('school', 'SchoolController');
Route::resource('skill', 'SkillController');
