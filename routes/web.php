<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\CollaboratorsController;
use App\Http\Controllers\HealthUnitsController;
use App\Http\Controllers\MedicalSchedulesController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    
    Route::controller(AttendancesController::class)->group(function () {
        Route::get('/attendances', 'list')->name('attendances.list');
        Route::get('/attendances/create', 'create')->name('attendances.create');
        Route::get('/attendances/{hash}/edit', 'edit')->name('attendances.edit');
    });

    Route::controller(PatientsController::class)->group(function () {
        Route::get('/patients', 'list')->name('patients.list');
        Route::get('/patients/create', 'create')->name('patients.create');
        Route::get('/patients/{hash}/edit', 'edit')->name('patients.edit');
    });

    Route::controller(CollaboratorsController::class)->group(function () {
        Route::get('/collaborators', 'list')->name('collaborators.list');
        Route::get('/collaborators/create', 'create')->name('collaborators.create');
        Route::get('/collaborators/{hash}/edit', 'edit')->name('collaborators.edit');
    });

    Route::controller(HealthUnitsController::class)->group(function () {
        Route::get('/healthunits', 'list')->name('healthunits.list');
        Route::get('/healthunits/create', 'create')->name('healthunits.create');
        Route::get('/healthunits/{hash}/edit', 'edit')->name('healthunits.edit');
    });

    Route::controller(MedicalSchedulesController::class)->group(function () {
        Route::get('/medicalschedules', 'list')->name('medicalschedules.list');
        Route::get('/medicalschedules/create', 'create')->name('medicalschedules.create');
        Route::get('/medicalschedules/{hash}/edit', 'edit')->name('medicalschedules.edit');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'list')->name('users.list');
        Route::get('/users/create', 'create')->name('users.create');
        Route::get('/users/{hash}/edit', 'edit')->name('users.edit');
    });
});