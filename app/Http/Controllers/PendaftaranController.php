<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spmb = Pendaftaran::first(); // ambil satu-satunya data, null kalau belum ada
        return view('admin.spmb.index', compact('spmb'));
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
        $spmb = Pendaftaran::first();

        $rules = [
            'nama'   => 'required|string|max:50',
            'kontak' => 'required|string|regex:/^62[0-9]{9,13}$/',
            'gambar' => $spmb ? 'nullable|image|mimes:jpeg,png,jpg|max:5120' : 'required|image|mimes:jpeg,png,jpg|max:5120',
        ];

        $messages = [
            'nama.required'   => 'Nama wajib diisi.',
            'nama.max'        => 'Nama tidak boleh lebih dari 50 karakter.',
            'kontak.required' => 'Nomor kontak wajib diisi.',
            'kontak.regex'    => 'Format nomor telepon tidak valid.',
            'gambar.required' => 'Poster wajib diunggah.',
            'gambar.image'    => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes'    => 'Format gambar harus berupa jpeg, png, atau jpg.',
        ];

        $request->validate($rules, $messages);

        // Kalau belum ada data sama sekali, buat baru. Kalau sudah ada, pakai yang lama.
        if (!$spmb) {
            $spmb = new Pendaftaran();
        }

        $spmb->nama   = $request->nama;
        $spmb->kontak = $request->kontak;

        if ($request->hasFile('gambar')) {
            // Hapus poster lama kalau ada (proses update)
            if ($spmb->gambar && File::exists(storage_path('app/public/spmb/' . $spmb->gambar))) {
                File::delete(storage_path('app/public/spmb/' . $spmb->gambar));
            }

            $file = $request->file('gambar');
            $filename = Str::slug($spmb->nama) . '-' . time() . '.webp';
            $directoryPath = storage_path('app/public/spmb');

            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }

            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(900, 1200, 'center');
            $image->save($path, 90, 'webp');
            $spmb->gambar = $filename;
        }

        $spmb->save();

        return redirect()->route('spmb.index')->with('success', 'Data SPMB berhasil disimpan.');
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
        $spmb = Pendaftaran::findOrFail($id);

        if ($spmb->gambar && File::exists(storage_path('app/public/spmb/' . $spmb->gambar))) {
            File::delete(storage_path('app/public/spmb/' . $spmb->gambar));
        }

        $spmb->delete();

        return redirect()->route('spmb.index')->with('success', 'Data SPMB berhasil dihapus.');
    }

    public function spmbLanding()
    {
        $spmb = Pendaftaran::first();
        return view('spmb.index', compact('spmb'));
    }
}
