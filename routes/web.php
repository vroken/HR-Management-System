<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/kehadiran', PresenceController::class);
    Route::middleware(['admin'])->group(function () {
        Route::resource('/positions', JabatanController::class)->except(['create', 'edit']);
        Route::resource('/karyawan', KaryawanController::class)->except(['create', 'edit']);
        Route::resource('/absensi', AbsensiController::class);
        Route::get('/generate-pdf/{id}', [KaryawanController::class, 'viewPdf'])->name('generate.pdf');
    });
});


Route::middleware('guest')->group(function () {
    // auth
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

