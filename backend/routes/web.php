<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('users')->group(function () {
    Route::get('/', 'App\Http\Controllers\api\UserController@index');
    Route::get('/{id}', 'App\Http\Controllers\api\UserController@show');
    Route::get('/me', 'App\Http\Controllers\api\UserController@showCurrentUser');
});
