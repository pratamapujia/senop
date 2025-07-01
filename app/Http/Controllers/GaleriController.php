<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'judul_foto' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul_foto.required' => 'Judul foto harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'foto.max' => 'Ukuran foto maksimal 2MB',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = new Galeri();
        $galeri->judul_foto = $request->judul_foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = $galeri->judul_foto . "." . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/galeri'), $nama_file);
            $galeri->foto = $nama_file;
        }

        if ($galeri->save()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal ditambahkan 😭');
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
        $galeri = Galeri::find($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'judul_foto' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul_foto.required' => 'Judul foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'foto.max' => 'Ukuran foto maksimal 2MB',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = Galeri::find($id);
        $galeri->judul_foto = $request->judul_foto;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($galeri->foto) {
                Storage::delete('public/galeri/' . $galeri->foto);
            }

            $file = $request->file('foto');
            $nama_file = $galeri->judul_foto . "." . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/galeri'), $nama_file);
            $galeri->foto = $nama_file;
        }

        if ($galeri->save()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::find($id);
        if ($galeri->delete()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal dihapus 😭');
        }
    }

    public function landing()
    {
        $galeri = Galeri::latest()->paginate(8);
        return view('program.galeri', compact('galeri'));
    }
}
