<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Auth
Route::match(['get'], 'user', [App\Http\Controllers\Auth\RegisterController::class, 'user'])->name('user');

// Paramedics Auth
Route::match(['get', 'post'], 'paramedics', [App\Http\Controllers\Auth\RegisterController::class, 'paramedics'])->name('paramedics');


Route::group(['middleware' => ['auth']], function () {
    // User
    Route::match(['get', 'post'], 'user', [App\Http\Controllers\CallDetailsController::class, 'index'])->name('user');
    Route::match(['get', 'post'], 'call-details', [App\Http\Controllers\CallDetailsController::class, 'index'])->name('call-details');

    // Paramedic
    Route::match(['get', 'post'], 'paramedic', [App\Http\Controllers\ParamedicsController::class, 'index'])->name('paramedic');
    Route::match(['get'], 'users', [App\Http\Controllers\ParamedicsController::class, 'users'])->name('users');
    Route::match(['get'], 'add-user', [App\Http\Controllers\ParamedicsController::class, 'add_user'])->name('add-user');

    //Settings
    Route::match(['get', 'post'], 'profile', [App\Http\Controllers\SettingsController::class, 'update_profile'])->name('profile');
    Route::match(['get', 'post'], 'update-password', [App\Http\Controllers\SettingsController::class, 'update_password'])->name('password');
});