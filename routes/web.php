<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
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
