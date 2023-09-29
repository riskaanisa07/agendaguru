<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
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

Route::redirect('/', '/login');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::resource('/guru', GuruController::class)->middleware('role:admin');
    Route::resource('/agenda', AgendaController::class);
    Route::get('/agenda/{agenda}/print', [AgendaController::class, 'print'])->middleware('role:admin');
});