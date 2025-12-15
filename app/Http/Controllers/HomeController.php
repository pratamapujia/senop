<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Configs;
use App\Models\Galeri;
use App\Models\JSiswa;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $agenda = Agenda::where('tanggal', '>=', now()->toDateString())
            ->orderBy('tanggal', 'asc')->take(4)
            ->get();
        $galeri = Galeri::latest()->take(4)->get();
        $jsiswa = JSiswa::orderBy('jurusan', 'asc')->get();
        $testimoni = Testimoni::latest()->take(5)->get();
        $config = Configs::all();
        $berita = Berita::latest()->take(4)->get();


        return view('index', compact('agenda', 'jsiswa', 'galeri', 'testimoni', 'config', 'berita'));
    }
}
