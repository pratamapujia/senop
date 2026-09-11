<?php

namespace App\Http\Controllers;

use App\Models\Berita;
// use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        // 1. Hitung Jumlah Prestasi Akademik
        $countAkademik = Berita::where('status', 'published')
            ->whereHas('kategori', function ($query) {
                $query->where('slug', 'prestasi-akademik');
            })->count();

        // 2. Hitung Jumlah Prestasi Non-Akademik
        $countNonAkademik = Berita::where('status', 'published')
            ->whereHas('kategori', function ($query) {
                $query->where('slug', 'prestasi-non-akademik');
            })->count();

        // 3. Total Keseluruhan Prestasi
        $totalPrestasi = $countAkademik + $countNonAkademik;

        // 4. Ambil Semua Data Prestasi (Gabungan) untuk di-looping di Card (9 item per halaman agar pas 3 kolom)
        $prestasi = Berita::with('kategori')
            ->whereHas('kategori', function ($query) {
                $query->whereIn('slug', ['prestasi-akademik', 'prestasi-non-akademik']);
            })
            ->where('status', 'published')
            ->latest()
            ->paginate(9)->withQueryString();

        return view('prestasi.index', compact('prestasi', 'countAkademik', 'countNonAkademik', 'totalPrestasi'));
    }
}
