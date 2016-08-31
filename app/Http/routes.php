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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('daftar', [
//     'as' => 'daftar',
//     'uses' => 'memberController@daftar'
// ]);
Route::group(['middleware'=>['auth']],function() {
Route::resource('member','memberController');
Route::resource('pengurus','pengurusController');
Route::resource('pertemuan','pertemuanController');
});

// Route::auth();

// Route::get('/home', 'HomeController@index');


// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes... removed!

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
