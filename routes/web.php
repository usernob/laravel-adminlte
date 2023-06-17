<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, "index"])->name("dashboard.index");

Route::get('/user', [UserController::class, "index"])->name("user.index");

Route::get('/login', [AuthController::class, "login"])->name("auth.login");

Route::get('/register', [AuthController::class, "register"])->name("auth.register");

Route::post('/proses-register', [AuthController::class, "prosesRegister"])->name("auth.proses-register");
