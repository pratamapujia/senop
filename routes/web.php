<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PrestasiController;
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
    Route::get('/struktur', [StrukturController::class, 'strukturLanding'])->name('struktur');

    // Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');

    // Prestasi
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');

    // Jurusan
    Route::get('/jurusan/{jurusan:kode_jurusan}', [JurusanController::class, 'show'])
        ->name('jurusan.show');

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
    Route::resource('dm-kategori', KategoriController::class);
    Route::resource('dm-berita', BeritaController::class);
    Route::resource('dm-galeri', GaleriController::class);
    Route::resource('dm-testimoni', TestimoniController::class);
    Route::resource('dm-jurusan', JurusanController::class);

    // Rute untuk mengubah status saja (tanpa edit foto/konten)
    Route::patch('berita/{berita}/status', [BeritaController::class, 'updateStatus'])->name('dm-berita.update-status');

    // Logout Admin
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
