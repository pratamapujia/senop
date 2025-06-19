<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

// Route pengunjung website
Route::middleware('guest:admin')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');
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
    Route::get('/agenda', function () {
        return view('program.agenda');
    })->name('agenda');
    Route::get('/galeri', function () {
        return view('program.galeri');
    })->name('galeri');
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
    Route::resource('agenda', AgendaController::class);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
