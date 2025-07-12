<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JSiswaController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

// Route pengunjung website
Route::middleware('guest:admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', function () {
        return view('about.index');
    })->name('about');
    Route::get('/fasilitas', function () {
        return view('about.fasilitas');
    })->name('fasilitas');
    Route::get('/prestasi', function () {
        return view('about.prestasi');
    })->name('prestasi');
    Route::get('/struktur', function () {
        return view('about.struktur');
    })->name('struktur');
    Route::get('/visimisi', function () {
        return view('about.visimisi');
    })->name('visimisi');
    Route::get('/berita', function () {
        return view('program.berita');
    })->name('berita');
    Route::get('/ekskul', function () {
        return view('program.ekskul');
    })->name('ekskul');
    Route::get('/profjur', function () {
        return view('program.profjur');
    })->name('profjur');
    Route::get('/agenda', [AgendaController::class, 'landing'])->name('agenda.landing');
    Route::get('/galeri', [GaleriController::class, 'landing'])->name('galeri.landing');
    Route::get('/ppdb', function () {
        return view('program.ppdb');
    })->name('ppdb');
    Route::get('/panel', function () {
        return view('auth.loginadmin');
    })->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('loginadmin');
});

// Route admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('admin/agenda', AgendaController::class);
    Route::resource('admin/jsiswa', JSiswaController::class);
    Route::resource('admin/galeri', GaleriController::class);
    Route::resource('admin/berita', BeritaController::class);
    Route::resource('admin/guru', GuruController::class);
    Route::resource('admin/prestasi', PrestasiController::class);
    Route::resource('admin/testimoni', TestimoniController::class);
    Route::resource('admin/ppdb', PPDBController::class);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
