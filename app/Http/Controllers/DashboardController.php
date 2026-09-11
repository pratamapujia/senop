<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita    = Berita::count();
        $totalPublished = Berita::where('status', 'published')->count();
        $totalDraft     = Berita::where('status', 'draft')->count();
        $totalJurusan   = Jurusan::count();
        $totalGaleri    = Galeri::count();
        $totalKategori  = Kategori::count();

        $beritaTerbaru = Berita::with('kategori')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.index', compact(
            'totalBerita',
            'totalPublished',
            'totalDraft',
            'totalJurusan',
            'totalGaleri',
            'totalKategori',
            'beritaTerbaru'
        ));
    }
}
