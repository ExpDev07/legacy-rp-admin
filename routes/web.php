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

// Logging out
Route::get('logout', 'Auth\SteamLoginController@logout')->name('logout');

// Steam authentication
SteamLogin::routes(['controller' => SteamLoginController::class]);

// Render the about page for "/staff",
Route::resource('staff', 'StaffController');

// Render the about page for "/admin",
Route::resource('admin', 'AdminController');

//Render the permissions page
Route::resource('admin.permissions', 'PermissionsController');

// Players resource: https://laracasts.com/discuss/channels/laravel/nested-resources-controllers-structure
Route::resource('players', 'PlayerController');
Route::resource('players.warnings', 'Player\WarningController');
Route::resource('players.ban', 'Player\BanController');
Route::resource('players.logs', 'Player\LogController');

// Warnings resource
Route::resource('warnings', 'WarningController');

// Roles resource
Route::resource('roles', 'RoleController');
