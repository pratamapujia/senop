<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            'berita' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'penulis' => 'required',
            'tanggal' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'berita.required' => 'Berita harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'penulis.required' => 'Penulis harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->berita = $request->berita;
        $berita->penulis = $request->penulis;
        $berita->credit = $request->credit;
        $berita->tanggal = $request->tanggal;
        $berita->slug = Str::slug($request->judul);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = Str::slug($request->judul) . "-" . time() . ".webp";
            $directoryPath = storage_path('app/public/berita');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0775, true, true);
            }
            $path = $directoryPath . '/' . $nama_file;
            $image = Image::read($file->getRealPath());
            $image->scaleDown(width: 1200);
            $image->toWebp(80)->save($path);
            $berita->foto = $nama_file;
        }

        if ($berita->save()) {
            return redirect()->route('berita.index')->with('berhasil', 'Berita berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Berita gagal ditambahkan 😭');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
