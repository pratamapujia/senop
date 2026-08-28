<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Testimoni;

// use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $agenda = Agenda::where('tanggal', '>=', now()->toDateString())
            ->where('tanggal', '<=', now()->endOfMonth()->toDateString()) // Batasi hanya sampai akhir bulan ini
            ->orderBy('tanggal', 'asc')
            ->take(6)
            ->get();
        $berita = Berita::orderBy('created_at', 'desc')->take(4)->get();
        $testimoni = Testimoni::orderBy('created_at', 'desc')->take(6)->get();
        return view('index', compact('agenda', 'berita', 'testimoni'));
    }
}
