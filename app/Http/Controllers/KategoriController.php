<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|unique:kategori,nama',
        ], [
            'nama.required' => 'Nama kategori harus diisi',
            'nama.unique' => 'Nama kategori sudah ada',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama);

        if ($kategori->save()) {
            return redirect()->route('dm-kategori.index')->with('success', 'Kategori berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Kategori gagal ditambahkan');
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
        $validasi = $request->validate([
            'nama' => 'required|unique:kategori,nama,' . $id,
        ], [
            'nama.required' => 'Nama kategori harus diisi',
            'nama.unique' => 'Nama kategori sudah ada',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama);

        if ($kategori->save()) {
            return redirect()->route('dm-kategori.index')->with('success', 'Kategori berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Kategori gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        if ($kategori->delete()) {
            return redirect()->route('dm-kategori.index')->with('success', 'Kategori berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Kategori gagal dihapus');
        }
    }
}
