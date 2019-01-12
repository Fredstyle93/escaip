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
    Route::get('/home', 'AdminController@index')->name('admin.home');

    Route::get('users','UserController@display')->name('users.display');

    Route::get('school','SchoolController@index')->name('school');
    Route::get('school/add','SchoolController@create')->name('school.add');
    Route::post('school/store','SchoolController@store')->name('school.store');
    Route::get('school/{school}/remove','SchoolController@destroy')->name('schools.destroy');
    Route::get('school/{school}/edit','SchoolController@edit')->name('school.edit');
    Route::post('school/{school}/update','SchoolController@update')->name('school.update');

    Route::get('skill','SkillController@index')->name('skill');
    Route::get('skill/add','SkillController@create')->name('skill.add');
    Route::post('skill/store','SkillController@store')->name('skill.store');
    Route::get('skill/{skill}/remove','SkillController@destroy')->name('skills.destroy');
    Route::get('skill/{skill}/edit','SkillController@edit')->name('skill.edit');
    Route::put('skill/{skill}/update','SkillController@update')->name('skill.update');


    Route::get('category','AdminController@category');

});




Route::group(['prefix' => 'users'], function() {
    Route::get('', 'UserController@index');
    Route::post('create', 'UserController@store')->name('user.store');
    Route::get('{user}', 'UserController@show')->name('user.show');
    Route::get('{user}/delete', 'UserController@destroy')->name('user.destroy');
});



/**
 *  All routes require auth's middleware
 */
Route::group(['middleware'=>'auth'],function(){
    Route::get('/messagerie', 'ConversationsController@index')->name('messagerie');
        Route::get('/conversations', 'ConversationsController@index')->name('conversations');
        Route::get('/conversations/{user}', 'ConversationsController@show')
        ->name('conversations.show')
        ->middleware('can:talkTo,user');
        Route::post('/conversations/{user}', 'ConversationsController@store')->middleware('can:talkTo,user');

    Route::group(['prefix' => 'profile'], function() {
        Route::get('', 'UserController@profile')->name('profile');
        Route::get('edit', 'UserController@edit')->name('profile.edit');
        Route::put('edit', 'UserController@update')->name('profile.update');


    });

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/home', 'ProjectController@store')->name('home');
});

Route::group(['prefix' => 'portfolios'], function() {
    // Route::get('', 'CategoryController@index')->name('category.index');
});

Route::resource('project', 'ProjectController');
Route::resource('category', 'CategoryController');
// Route::resource('school', 'SchoolController');
// Route::resource('skill', 'SkillController');
