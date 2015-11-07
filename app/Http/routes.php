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

Route::get('/', 'WelcomeController@index');
Route::get('/index', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
Route::post('/contact','WelcomeController@contact');
Route::get('home', 'HomeController@index');


Route::get('/register','WelcomeController@register');
Route::post('/register','WelcomeController@create');
Route::get('activate/{code}', 'Auth\AuthController@activateAccount');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
