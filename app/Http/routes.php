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
    return view('auth.login');
});

//Route to show the login form
Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@getLogout');

//Route to process the registration form
Route::get('/register', 'LoginController@getRegister');
Route::post('/register', 'LoginController@postRegister');

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('/dashboard', [
	'middleware' => 'auth',
	'uses' => 'UserDashboard@index'
	]);


