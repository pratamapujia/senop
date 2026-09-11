<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;

// use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        // Ambil kategori "Fasilitas" berdasarkan slug
        $kategori = Kategori::where('slug', 'fasilitas')->first();

        $fasilitas = collect(); // default kosong kalau kategori belum dibuat

        if ($kategori) {
            $fasilitas = Berita::with('author')
                ->where('status', 'published')
                ->where('kategori_id', $kategori->id)
                ->latest()
                ->paginate(9);
        }

        return view('fasilitas.index', compact('fasilitas'));
    }
}
