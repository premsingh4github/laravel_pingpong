<?php

Route::group(['prefix' => 'authentication', 'namespace' => 'Modules\Authentication\Http\Controllers'], function()
{
	Route::get('/', 'AuthenticationController@index');
	Route::get('/register','AuthenticationController@register');
	Route::post('/register','AuthenticationController@create');
});
Route::group(['namespace' => 'Modules\Authentication\Http\Controllers'],function(){

});