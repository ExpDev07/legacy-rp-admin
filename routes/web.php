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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Render the index page for "/",
Route::get('/', function () {
    return view('index');
});

// Use authentication for routes.
Auth::routes();

// Steam authentication
Route::get('auth/steam', 'Auth\AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'Auth\AuthController@handle')->name('auth.steam.handle');