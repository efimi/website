<?php

use Illuminate\Http\Request;

Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@login');
Route::post('/logout', 'Auth\AuthController@logout');
// protect
// added in kernel.php Middleware jwt.auth // uses GetUserFromToken JWT class
// group instead of goroue

Route::group(['middleware' => 'jwt.auth'], function(){
	Route::get('/me', 'Auth\AuthController@user');
	Route::get('/timeline', 'TimelineController@index');
});