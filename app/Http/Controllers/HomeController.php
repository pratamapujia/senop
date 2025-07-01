<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Galeri;
use App\Models\JSiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $agenda = Agenda::latest()->take(4)->get();
        $galeri = Galeri::latest()->take(8)->get();
        $jsiswa = JSiswa::all();


        return view('index', compact('agenda', 'jsiswa', 'galeri'));
    }
}
