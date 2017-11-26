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

Route::get('result', function () {
    return view('result');
});

Route::get('test', function () {
    return view('test');
});

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect'); //FBLogin 2017-11-21
Route::get('/callback', 'SocialAuthFacebookController@callback'); //FBLogin 2017-11-21

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');