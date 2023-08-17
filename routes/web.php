<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\DebugController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::redirect('/', '/login');
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login/check', [SessionController::class, 'login'])->name('login.check');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => ['App\Http\Middleware\IsLogin']], function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
        Route::group(['prefix' => 'admin/data/mahasiswa', 'as' => 'mahasiswa.'], function () {
            Route::get('/', [MahasiswaController::class, 'index'])->name('index');
            Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
            Route::post('/', [MahasiswaController::class, 'store'])->name('store');
            Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('edit');
            Route::put('/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
            Route::delete('/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('destroy');
            Route::get('/{mahasiswa}', [MahasiswaController::class, 'show'])->name('show'); // Add this line
        });
        
    
        Route::get('/cetak_pdf', [MahasiswaController::class, 'cetak_pdf'])->name('cetak_pdf');
        Route::get('/cetak_excel', [MahasiswaController::class, 'cetak_excel'])->name('cetak_excel');
    
        Route::group(['prefix' => 'admin/data/kota', 'as' => 'kota.'], function () {
            Route::get('/', [KotaController::class, 'index'])->name('index');
            Route::get('/pdf', [KotaController::class, 'downloadPDF'])->name('downloadPDF');
            Route::get('/excel', [KotaController::class, 'downloadExcel'])->name('downloadExcel');
        });
    
        Route::resource('/admin/administration', AdministrationController::class)->except('show');
    
        Route::group(['prefix' => 'admin/debug', 'as' => 'debug.'], function () {
            Route::get('/', [DebugController::class, 'index'])->name('index');
            Route::post('/', [DebugController::class, 'update'])->name('update');
        });
    
        Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
    });
});

Route::group(['prefix' => 'clear', 'middleware' => 'debug'], function () {
    Route::get('cache', [CacheClearController::class, 'clearCache'])->name('cache.clear');
    Route::get('config', [CacheClearController::class, 'clearConfig'])->name('config.clear');
    Route::get('view', [CacheClearController::class, 'clearView'])->name('view.clear');
    Route::get('route', [CacheClearController::class, 'clearRoute'])->name('route.clear');
    Route::get('optimize', [CacheClearController::class, 'clearOptimize'])->name('optimize.clear');
    Route::get('database', [CacheClearController::class, 'refreshDatabase'])->name('refresh.database');
});