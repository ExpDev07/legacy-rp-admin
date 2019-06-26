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

use App\Http\Controllers\Auth\SteamLoginController;
use Illuminate\Support\Facades\Route;
use kanalumaddela\LaravelSteamLogin\Facades\SteamLogin;

// Render the index page for "/",
Route::get('', function () {
    return view('index');
})->name('index');

// Render the staff page for "/staff",
Route::get('staff', function () {
    return view('staff');
})->name('staff');

// Render the about page for "/about",
Route::get('about', function () {
    return view('about');
})->name('about');

// Render the "how to play" page for "/how-to-play",
Route::get('how-to-play', function () {
    return view('how-to-play');
})->name('how-to-play');

// Render the discord page for "/discord",
Route::get('discord', function () {
    return view('discord');
})->name('discord');

// Logging out
Route::get('logout', 'Auth\SteamLoginController@logout')->name('logout');

// Steam authentication
SteamLogin::routes(['controller' => SteamLoginController::class]);

// Players resource: https://laracasts.com/discuss/channels/laravel/nested-resources-controllers-structure
Route::resource('players', 'PlayerController');
Route::resource('players.warnings', 'Player\WarningController');
Route::resource('players.ban', 'Player\BanController');
Route::resource('players.logs', 'Player\LogController');

// Warnings resource
Route::resource('warnings', 'WarningController');

// Bans resource
Route::resource('bans', 'BanController');
