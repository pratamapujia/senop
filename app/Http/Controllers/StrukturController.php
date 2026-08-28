<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.struktur.index', compact('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:4096',

            ],
            [
                'nama_lengkap.required' => 'Nama lengkap harus diisi.',
                'jabatan.required' => 'Jabatan harus diisi.',
                'foto.required' => 'Foto harus diunggah.',
                'foto.image' => 'File yang diunggah harus berupa gambar.',
                'foto.mimes' => 'Format gambar harus berupa jpeg, png, atau jpg.',
                'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
            ]
        );

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $struktur = new Struktur();
        $struktur->nama_lengkap = $request->input('nama_lengkap');
        $struktur->jabatan = $request->input('jabatan');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = Str::slug($struktur->nama_lengkap) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/struktur');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(270, 360, 'top');
            $image->save($path, 80, 'webp');
            $struktur->foto = $filename;
        }

        if ($struktur->save()) {
            return redirect()->route('dm-struktur.index')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
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
        $struktur = Struktur::findOrFail($id);
        return view('admin.struktur.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
                'status' => 'required|in:aktif,non-aktif',

            ],
            [
                'nama_lengkap.required' => 'Nama lengkap harus diisi.',
                'jabatan.required' => 'Jabatan harus diisi.',
                'foto.image' => 'File yang diunggah harus berupa gambar.',
                'foto.mimes' => 'Format gambar harus berupa jpeg, png, atau jpg.',
                'foto.max' => 'Ukuran gambar tidak boleh lebih dari 4MB.',
                'status.in' => 'Status tidak valid.',
            ]
        );

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $struktur = Struktur::findOrFail($id);
        $struktur->nama_lengkap = $request->input('nama_lengkap');
        $struktur->jabatan = $request->input('jabatan');
        $struktur->status = $request->input('status');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($struktur->foto && File::exists(storage_path('app/public/struktur/' . $struktur->foto))) {
                File::delete(storage_path('app/public/struktur/' . $struktur->foto));
            }

            $file = $request->file('foto');
            $filename = Str::slug($struktur->nama_lengkap) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/struktur');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(270, 360, 'top');
            $image->save($path, 80, 'webp');
            $struktur->foto = $filename;
        }

        if ($struktur->save()) {
            return redirect()->route('dm-struktur.index')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $struktur = Struktur::findOrFail($id);

        // Hapus foto lama jika ada
        if ($struktur->foto && File::exists(storage_path('app/public/struktur/' . $struktur->foto))) {
            File::delete(storage_path('app/public/struktur/' . $struktur->foto));
        }

        if ($struktur->delete()) {
            return redirect()->route('dm-struktur.index')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data. Silakan coba lagi.');
        }
    }
}
