<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
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

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::get('/user/{id}', [UserController::class, 'show'])->name('user.detail');

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

    Route::get('/add/siswa', [SiswaController::class, 'create'])->name('siswa.add');

    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

    Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.detail');
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/proses-register', [AuthController::class, 'prosesRegister'])->name('auth.proses-register');

Route::post('/otentikasi', [AuthController::class, 'otentikasi'])->name('auth.otentikasi');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
