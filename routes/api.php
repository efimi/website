<?php

use Illuminate\Http\Request;

Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@login');
Route::post('/logout', 'Auth\AuthController@logout');
// protect
Route::get('/me', 'Auth\AuthController@user');