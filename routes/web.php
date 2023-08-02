<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\SessionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/check', [SessionController::class, 'login']); //check email dan password

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('App\Http\Middleware\IsLogin');

Route::resource('/admin/data/mahasiswa', MahasiswaController::class)->middleware('App\Http\Middleware\IsLogin');
Route::get('/cetak_pdf', [MahasiswaController::class, 'cetak_pdf'])->name('cetak_pdf');

Route::get('/admin/data/kota', [KotaController::class, 'index'])->name('kota.index')->middleware('App\Http\Middleware\IsLogin');
Route::get('/admin/administration', [AdministrationController::class, 'index'])->name('administration.index')->middleware('App\Http\Middleware\IsLogin');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
