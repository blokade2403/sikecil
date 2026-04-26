<?php

use App\Http\Controllers\Accident\AccidentReportController;
use App\Http\Controllers\Apar\AparCheckController;
use App\Http\Controllers\Apar\AparController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\HealthCheckController;
use App\Http\Controllers\EmployeeHealth\EmployeeHealthController;
use App\Http\Controllers\Exercise\ExerciseController;
use App\Http\Controllers\Hiradc\HiradcController;
use App\Http\Controllers\SettingUsers\PositionController;
use App\Http\Controllers\SettingUsers\RoleController;
use App\Http\Controllers\SettingUsers\RoleUserController;
use App\Http\Controllers\SettingUsers\UnitController;
use App\Http\Controllers\SettingUsers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('layouts.main');
    // return view('layouts-login.index');
    return view('index');
});

Route::get('/login', function () {
    return view('layouts-login.index');
})->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('hiradc', HiradcController::class);
Route::get('hiradc-matrix', [HiradcController::class, 'matrix'])->name('hiradc.matrix');
Route::get('hiradc-dashboard', [HiradcController::class, 'dashboard'])->name('hiradc.dashboard');
Route::get('hiradc-export', [HiradcController::class, 'exportPdf'])->name('hiradc.export');
Route::get('hiradc/{id}/submit', [HiradcController::class, 'submit'])->name('hiradc.submit');
Route::get('hiradc/{id}/approve', [HiradcController::class, 'approve'])->name('hiradc.approve');
Route::get('hiradc/{id}/reject', [HiradcController::class, 'reject'])->name('hiradc.reject');

Route::resource('apar', AparController::class);
Route::get('/apar-qr/{kode}', [AparController::class, 'detailQR'])
    ->name('apar.detail.qr');
Route::get('/apar-check/{id}', [AparCheckController::class, 'create'])
    ->name('apar.check.create');
Route::post('/apar-check', [AparCheckController::class, 'store'])
    ->name('apar.check.store');
Route::get('/apar/{id}/modal', [AparController::class, 'showModal']);

Route::resource('accident', AccidentReportController::class);
Route::get('accident/{id}/pdf', [AccidentReportController::class, 'pdf'])->name('accident.pdf');

Route::prefix('kesehatan')->group(function () {

    Route::get('/', [HealthCheckController::class, 'index'])->name('health.index');
    Route::get('/create', [HealthCheckController::class, 'create'])->name('health.create');
    Route::post('/store', [HealthCheckController::class, 'store'])->name('health.store');
    Route::get('/{id}', [HealthCheckController::class, 'show'])->name('health.show');
    Route::get('/exercise/{health_check}', [ExerciseController::class, 'create'])->name('exercise.create');
    Route::post('/exercise/store', [ExerciseController::class, 'store'])->name('exercise.store');
});

Route::prefix('setting-user')->group(function () {
    Route::resource('units', UnitController::class);
    Route::resource('users', UserController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('employees', EmployeeController::class);
    Route::get('role-user', [RoleUserController::class, 'index'])->name('role_user.index');
    Route::post('role-user/assign', [RoleUserController::class, 'assign'])->name(
        'role_user.assign',
    );
    Route::delete('role-user/{user}/{role}', [RoleUserController::class, 'remove'])->name(
        'role_user.remove',
    );
});
