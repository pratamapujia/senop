<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

// Route Landing Page
Route::middleware('guest:admin')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

    // Login Admin
    Route::get('/panel', function () {
        return view('auth.index');
    })->name('login-admin');
    Route::post('login', [AuthController::class, 'login'])->name('loginAdmin');

    // Visi & Misi
    Route::get('/visi-misi', function () {
        return view('visimisi.index');
    })->name('visi-misi');

    // Profil
    Route::get('/profil', function () {
        return view('profil.index');
    })->name('profil');

    // Sejarah
    Route::get('/sejarah', function () {
        return view('sejarah.index');
    })->name('sejarah');

    // Struktur
    Route::get('/struktur', function () {
        return view('struktur.index');
    })->name('struktur');

    // Fasilitas
    Route::get('/fasilitas', function () {
        return view('fasilitas.index');
    })->name('fasilitas');

    // Prestasi
    Route::get('/prestasi', function () {
        return view('prestasi.index');
    })->name('prestasi');

    // Jurusan
    Route::get('/jurusan-tkj', function () {
        return view('jurusan.tkj');
    })->name('tkj');
    Route::get('/jurusan-rpl', function () {
        return view('jurusan.rpl');
    })->name('rpl');
    Route::get('/jurusan-mp', function () {
        return view('jurusan.mp');
    })->name('mp');
    Route::get('/jurusan-tsm', function () {
        return view('jurusan.tsm');
    })->name('tsm');
    Route::get('/jurusan-tkr', function () {
        return view('jurusan.tkr');
    })->name('tkr');
    Route::get('/jurusan-dkv', function () {
        return view('jurusan.dkv');
    })->name('dkv');

    // Berita
    Route::get('/berita', [BeritaController::class, 'beritaLanding'])->name('berita');
    // Detail Berita
    Route::get('/detail-berita/{slug}', [BeritaController::class, 'detailBerita'])->name('detail-berita');
    // Rute list berita berdasarkan kategori
    Route::get('/berita/kategori/{kategori}', [BeritaController::class, 'category'])->name('berita.category');

    // Agenda
    Route::get('/agenda', [AgendaController::class, 'agendaLanding'])->name('agenda');

    // Galeri
    Route::get('/galeri', [GaleriController::class, 'galeriLanding'])->name('galeri');

    // Kontak
    Route::get('/kontak', function () {
        return view('kontak.index');
    })->name('kontak');
});


// Route Admin
Route::middleware('auth:admin')->group(function () {

    // Dashboard Admin
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // Route Resource
    Route::resource('dm-struktur', StrukturController::class);
    Route::resource('dm-agenda', AgendaController::class);
    Route::resource('dm-berita', BeritaController::class);
    Route::resource('dm-galeri', GaleriController::class);
    Route::resource('dm-testimoni', TestimoniController::class);

    // Rute untuk mengubah status saja (tanpa edit foto/konten)
    Route::patch('berita/{berita}/status', [BeritaController::class, 'updateStatus'])->name('dm-berita.update-status');

    // Logout Admin
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
