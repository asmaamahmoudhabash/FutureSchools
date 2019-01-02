<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/start', function () {
    return View::make('admin.start');
});

Route::get('/', 'FrontController@index');
//services
Route::get('services', 'FrontController@services');
Route::get('service/{slug}', 'FrontController@service');

//news
Route::get('post/{slug}', 'FrontController@post');
Route::get('news', 'FrontController@posts');
Route::get('search', 'FrontController@search');
//client
Route::get('client', 'FrontController@client');
//albums
Route::get('albums', 'FrontController@albums');
Route::get('album/{slug}', 'FrontController@album');

//contact
Route::get('contact_us', 'FrontController@contactus');
Route::post('contactus', 'FrontController@contactus2');
//jobs
Route::get('jobs', 'FrontController@job');
Route::post('jobs', 'FrontController@job2');
//page
Route::get('page/{id}', 'FrontController@page');

//login
Route::get('login', function () {
    if (Auth::check()) {
        return Redirect::to('/start');
    } else {
        return View::make('admin.users.login');
    }
});

Route::post('login', ['before' => 'csrf', function (Request $request) {
    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {  // login_access=1 if i wanna make premissions levels
        return Redirect::to('/start');
    } else {
        Session::set('loginerror', 'بيانات الدخول غير صحيحة');

        return View::make('admin.users.login');
    }
}]);

Route::get('logout', function () {
    Auth::logout();

    return Redirect::to('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return View::make('admin.start');
    });

    Route::resource('user', 'UserController');
    Route::resource('news', 'NewsController');
    Route::resource('slide', 'SlideController');
    Route::resource('client', 'ClientController');
    Route::resource('service', 'ServiceController');
    Route::resource('partner', 'PartnerController');
    Route::resource('album', 'AlbumController');
    Route::resource('setting', 'SettingController');
    Route::resource('dashboard', 'DashController@index');
    Route::resource('contactus', 'ContactController');
    Route::resource('job', 'JobController');
    Route::resource('page', 'PageController');
});
