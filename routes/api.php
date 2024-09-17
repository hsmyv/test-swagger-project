<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');

Route::get('/users', 'App\Http\Controllers\UserController@getUsers');
