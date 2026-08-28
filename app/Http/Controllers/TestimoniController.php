<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'jabatan' => 'nullable',
            'testimoni' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp',
        ], [
            'nama.required' => 'Nama harus diisi',
            'testimoni.required' => 'Testimoni harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        $testimoni->testimoni = $request->testimoni;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = Str::slug($testimoni->nama) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/testimoni');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0777, true, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(450, 450, 'top');
            $image->save($path, 90, 'webp');
            $testimoni->gambar = $filename;
        }

        if ($testimoni->save()) {
            return redirect()->route('dm-testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Testimoni gagal ditambahkan');
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
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'jabatan' => 'nullable',
            'testimoni' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp',
        ], [
            'nama.required' => 'Nama harus diisi',
            'testimoni.required' => 'Testimoni harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        $testimoni->testimoni = $request->testimoni;

        if ($request->hasFile('gambar')) {
            // Hapus foto lama jika ada
            if ($testimoni->gambar && File::exists(storage_path('app/public/testimoni/' . $testimoni->gambar))) {
                File::delete(storage_path('app/public/testimoni/' . $testimoni->gambar));
            }
            $file = $request->file('gambar');
            $filename = Str::slug($testimoni->nama) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/testimoni');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0777, true, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(450, 450, 'top');
            $image->save($path, 90, 'webp');
            $testimoni->gambar = $filename;
        }

        if ($testimoni->save()) {
            return redirect()->route('dm-testimoni.index')->with('success', 'Testimoni berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Testimoni gagal diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        // Hapus foto lama jika ada
        if ($testimoni->gambar && File::exists(storage_path('app/public/testimoni/' . $testimoni->gambar))) {
            File::delete(storage_path('app/public/testimoni/' . $testimoni->gambar));
        }

        if ($testimoni->delete()) {
            return redirect()->route('dm-testimoni.index')->with('success', 'Testimoni berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Testimoni gagal dihapus');
        }
    }
}
