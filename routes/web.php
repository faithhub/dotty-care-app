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
    return redirect()->route('login');
});


Auth::routes();

//404 handled
Route::fallback(function () {
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Auth
Route::match(['get'], 'user', [App\Http\Controllers\Auth\RegisterController::class, 'user'])->name('user');

// Paramedics Auth
Route::match(['get', 'post'], 'paramedics', [App\Http\Controllers\Auth\RegisterController::class, 'paramedics'])->name('paramedics');


Route::group(['middleware' => ['auth']], function () {


    Route::group(['middleware' => ['user']], function () {
        // User
        Route::match(['get', 'post'], 'user', [App\Http\Controllers\Usercontroller::class, 'index'])->name('user');
        Route::match(['get', 'post'], 'call-details', [App\Http\Controllers\CallDetailsController::class, 'index'])->name('call-details');
        Route::match(['get'], 'user-call-report', [App\Http\Controllers\Usercontroller::class, 'report'])->name('report');
        Route::match(['get'], 'download-pdf', [App\Http\Controllers\Usercontroller::class, 'download_pdf'])->name('download-pdf');
    });

    Route::group(['middleware' => ['doctor']], function () {
        // User
        Route::match(['get', 'post'], 'doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctor');
        Route::match(['get', 'post'], 'check-patient', [App\Http\Controllers\DoctorController::class, 'patient'])->name('patient');
        Route::match(['get', 'post'], 'patient-report', [App\Http\Controllers\DoctorController::class, 'patient_report'])->name('patient-report');
        // Route::match(['get', 'post'], 'call-details', [App\Http\Controllers\CallDetailsController::class, 'index'])->name('call-details');
        // Route::match(['get'], 'user-call-report', [App\Http\Controllers\DoctorController::class, 'report'])->name('report');
        // Route::match(['get'], 'download-pdf', [App\Http\Controllers\DoctorController::class, 'download_pdf'])->name('download-pdf');
    });


    Route::group(['middleware' => ['paramedic']], function () {
        //Paramedic
        Route::match(['get', 'post'], 'paramedic', [App\Http\Controllers\ParamedicsController::class, 'index'])->name('paramedic');
        Route::match(['get', 'post'], 'add-user', [App\Http\Controllers\ParamedicsController::class, 'add_user'])->name('add-user');
        Route::match(['get'], 'delete-session', [App\Http\Controllers\ParamedicsController::class, 'delete_session'])->name('delete-session');

        Route::group(['middleware' => ['add_user']], function () {
            //Validate User Session
            Route::match(['get', 'post'], 'call-details', [App\Http\Controllers\ParamedicsController::class, 'call_details'])->name('call-details');
            Route::match(['get', 'post'], 'assessment', [App\Http\Controllers\ParamedicsController::class, 'assessment'])->name('assessment');
            Route::match(['get', 'post'], 'treatment', [App\Http\Controllers\ParamedicsController::class, 'treatment'])->name('treatment');
            Route::match(['get', 'post'], 'call-report', [App\Http\Controllers\ParamedicsController::class, 'call_report'])->name('call-report');
            Route::match(
                ['get'],
                'save-report',
                [App\Http\Controllers\ParamedicsController::class, 'save_report']
            )->name('save-report');
            // Route::match(
            //     ['get'],
            //     'json-report',
            //     [App\Http\Controllers\ParamedicsController::class, 'json_report']
            // )->name('json-report');
        });
    });


    //Settings
    Route::match(['get', 'post'], 'profile', [App\Http\Controllers\SettingsController::class, 'update_profile'])->name('profile');
    Route::match(['get', 'post'], 'update-password', [App\Http\Controllers\SettingsController::class, 'update_password'])->name('password');
});