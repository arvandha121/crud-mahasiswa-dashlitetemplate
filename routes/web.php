<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CacheClearController;
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
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login/check', [SessionController::class, 'login'])->name('login.check');

Route::group(['middleware' => 'App\Http\Middleware\IsLogin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/admin/data/mahasiswa', MahasiswaController::class);
    Route::get('/cetak_pdf', [MahasiswaController::class, 'cetak_pdf'])->name('cetak_pdf');
    Route::get('/cetak_excel', [MahasiswaController::class, 'cetak_excel'])->name('cetak_excel');

    Route::get('/admin/data/kota', [KotaController::class, 'index'])->name('kota.index');
    Route::get('/pdf', [KotaController::class, 'downloadPDF'])->name('kota.downloadPDF');
    Route::get('/excel', [KotaController::class, 'downloadExcel'])->name('kota.downloadExcel');

    Route::resource('/admin/administration', AdministrationController::class);

    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::group([], function () {
    Route::get('/clear-cache', [CacheClearController::class, 'clearCache']);
    Route::get('/clear-config', [CacheClearController::class, 'clearConfig']);
    Route::get('/clear-view', [CacheClearController::class, 'clearView']);
    Route::get('/clear-route', [CacheClearController::class, 'clearRoute']);
    Route::get('/clear-optimize', [CacheClearController::class, 'clearOptimize']);
});