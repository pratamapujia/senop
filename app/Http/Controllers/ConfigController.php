<?php

namespace App\Http\Controllers;

use App\Models\Configs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Configs::all();
        return view('admin.config.index', compact('config'));
    }

    public function update(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_kepsek' => 'required|string|max:50',
            'foto_kepsek' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'sambutan_kepsek' => 'nullable|string',
            'visi_misi' => 'nullable|string',
        ], [
            'nama_kepsek.required' => 'Nama kepala sekolah harus diisi',
            'nama_kepsek.string' => 'Nama kepala sekolah harus berupa string',
            'nama_kepsek.max' => 'Nama kepala sekolah maksimal 50 karakter',
            'foto_kepsek.image' => 'Foto kepala sekolah harus berupa gambar',
            'foto_kepsek.mimes' => 'Format foto kepala sekolah harus jpg, png, jpeg, atau gif',
            'sambutan_kepsek.string' => 'Sambutan kepala sekolah harus berupa string',
            'visi_misi.string' => 'Visi dan misi harus berupa string',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        // Update Konfigurasi
        Configs::where('name', 'nama_kepsek')->update(['value' => $request->nama_kepsek]);
        Configs::where('name', 'sambutan_kepsek')->update(['value' => $request->sambutan_kepsek]);
        Configs::where('name', 'visi_misi')->update(['value' => $request->visi_misi]);

        if ($request->hasFile('foto_kepsek')) {
            // Ambil data foto lama dari database
            $old_foto = Configs::where('name', 'foto_kepsek')->first();

            // Hapus foto lama jika ada
            if ($old_foto && $old_foto->value) {
                $old_foto_path = 'public/configs/' . $old_foto->value;
                if (Storage::exists($old_foto_path)) {
                    Storage::delete($old_foto_path);
                }
            }

            // Simpan foto baru
            $foto = $request->file('foto_kepsek');
            $foto_name = 'kepsek-' . time() . '.webp';
            $directoryPath = storage_path('app/public/configs');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0775, true, true);
            }
            $path = $directoryPath . '/' . $foto_name;
            $image = Image::read($foto->getRealPath());
            $image->cover(500, 500, 'top');
            $image->toWebp(80)->save($path);

            // Update nama foto di database
            Configs::where('name', 'foto_kepsek')->update(['value' => $foto_name]);
        }

        return redirect()->route('config.index')->with('berhasil', 'Data konfigurasi berhasil diupdate 👍');
    }
}
