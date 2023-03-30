<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::middleware('guest')->group(function () {

    Route::get('/', [AuthenticationController::class, 'index'])->name('index');

    Route::post('register', [AuthenticationController::class, 'store'])->name('register');

    Route::post('login', [AuthenticationController::class, 'store'])->name('login');


});

Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('logout');
});
