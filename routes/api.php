<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\AttendancesDrugsController;
use App\Http\Controllers\AttendancesSymptomsController;
use App\Http\Controllers\CollaboratorsController;
use App\Http\Controllers\HealthUnitsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PatientsAttendancesController;
use App\Http\Controllers\MedicalSchedulesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::controller(AttendancesController::class)->group(function () {
        Route::post('/attendances', 'store')->name('attendances.store');
        Route::get('/attendances', 'index')->name('attendances.index');
        Route::get('/attendances/{id}', 'show')->name('attendances.show');
        Route::put('/attendances/{id}', 'update')->name('attendances.update');
        Route::delete('/attendances/{id}', 'destroy')->name('attendances.destroy');
    });

    Route::controller(AttendancesDrugsController::class)->group(function () {
        Route::post('/attendances/{attendances_id}/drugs', 'store')->name('attendances.drugs.store');
        Route::get('/attendances/{attendances_id}/drugs', 'index')->name('attendances.drugs.index');
        Route::get('/attendances/{attendances_id}/drugs/{id}', 'show')->name('attendances.drugs.show');
        Route::put('/attendances/{attendances_id}/drugs/{id}', 'update')->name('attendances.drugs.update');
        Route::delete('/attendances/{attendances_id}/drugs/{id}', 'destroy')->name('attendances.drugs.destroy');
    });

    Route::controller(AttendancesSymptomsController::class)->group(function () {
        Route::post('/attendances/{attendances_id}/symptoms', 'store')->name('attendances.symptoms.store');
        Route::get('/attendances/{attendances_id}/symptoms', 'index')->name('attendances.symptoms.index');
        Route::get('/attendances/{attendances_id}/symptoms/{id}', 'show')->name('attendances.symptoms.show');
        Route::put('/attendances/{attendances_id}/symptoms/{id}', 'update')->name('attendances.symptoms.update');
        Route::delete('/attendances/{attendances_id}/symptoms/{id}', 'destroy')->name('attendances.symptoms.destroy');
    });

    Route::controller(CollaboratorsController::class)->group(function () {
        Route::post('/collaborators', 'store')->name('collaborators.store');
        Route::get('/collaborators', 'index')->name('collaborators.index');
        Route::get('/collaborators/{id}', 'show')->name('collaborators.show');
        Route::put('/collaborators/{id}', 'update')->name('collaborators.update');
        Route::delete('/collaborators/{id}', 'destroy')->name('collaborators.destroy');
    });

    Route::controller(HealthUnitsController::class)->group(function () {
        Route::post('/healthunits', 'store')->name('healthunits.store');
        Route::get('/healthunits', 'index')->name('healthunits.index');
        Route::get('/healthunits/{id}', 'show')->name('healthunits.show');
        Route::put('/healthunits/{id}', 'update')->name('healthunits.update');
        Route::delete('/healthunits/{id}', 'destroy')->name('healthunits.destroy');
    });

    Route::controller(PatientsController::class)->group(function () {
        Route::post('/patients', 'store')->name('patients.store');
        Route::get('/patients', 'index')->name('patients.index');
        Route::get('/patients/{id}', 'show')->name('patients.show');
        Route::put('/patients/{id}', 'update')->name('patients.update');
        Route::delete('/patients/{id}', 'destroy')->name('patients.destroy');
    });

    Route::get('/patients/{patient_id}/attendances', [PatientsAttendancesController::class, 'index'])->name('patientsattendances.index');
    Route::get('/patients/{patient_id}/attendances/{id}', [PatientsAttendancesController::class, 'show'])->name('patientsattendances.show');

    Route::controller(MedicalSchedulesController::class)->group(function () {
        Route::post('/medicalschedules', 'store')->name('medicalschedules.store');
        Route::get('/medicalschedules', 'index')->name('medicalschedules.index');
        Route::get('/medicalschedules/{id}', 'show')->name('medicalschedules.show');
        Route::put('/medicalschedules/{id}', 'update')->name('medicalschedules.update');
        Route::delete('/medicalschedules/{id}', 'destroy')->name('medicalschedules.destroy');
    });
// });
