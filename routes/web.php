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

// Render the staff page for "/staff",
Route::get('/staff', function () {
    return view('staff');
});

// Render the about page for "/about",
Route::get('/about', function () {
    return view('about');
});

// Render the "how to play" page for "/howtoplay",
Route::get('/howtoplay', function () {
    return view('howtoplay');
});

// Render the "rules" page for "/rules",
Route::get('/rules', function () {
    return view('rules');
});

// Render the discord page for "/discord",
Route::get('/discord', function () {
    return view('discord');
});

// Steam authentication
Route::get('auth/steam', 'Auth\AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'Auth\AuthController@handle')->name('auth.steam.handle');

// Logging out
Route::get('logout', 'Auth\AuthController@logout')->name('logout');
