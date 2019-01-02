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

// front end routes
Route::get('/', 'FrontController@index');
Route::get('page/{id}', 'FrontController@page');
Route::get('post/{slug}', 'FrontController@post');
Route::get('gallery/{slug}', 'FrontController@gallery');
Route::get('service/{slug}', 'FrontController@service');
//Route::get('client/{slug}', 'FrontController@client');

Route::get('galleries', 'FrontController@galleries');
Route::get('clients', 'FrontController@clients');
Route::get('services', 'FrontController@services');
Route::get('news', 'FrontController@posts');

Route::get('jobs', 'FrontController@job');
Route::post('jobs', 'FrontController@job2');

Route::get('search', 'FrontController@search');

Auth::routes();

Route::get('/home', 'HomeController@index');

// admin routes
Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function () {
    Route::resource('post', 'PostController');
    Route::resource('slider', 'SliderController');
    Route::resource('partner', 'PartnerController');
    Route::resource('client', 'ClientController');
    Route::resource('service', 'ServiceController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('page', 'PageController');
    Route::resource('photo', 'PhotoController');
    Route::resource('contactus', 'ContactController');
    Route::resource('job', 'JobController');

    Route::get('settings', 'SettingsController@view');
    Route::post('settings', 'SettingsController@update');

    // user reset
    Route::get('user/change-password', 'UserController@changePassword');
    Route::post('user/change-password', 'UserController@changePasswordSave');
});
