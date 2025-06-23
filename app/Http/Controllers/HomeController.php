<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        #tampilkan 4 data agenda terbaru
        $agenda = Agenda::latest()->take(4)->get();

        return view('index', compact('agenda'));
    }
}
