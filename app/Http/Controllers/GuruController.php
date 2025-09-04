<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = Str::slug($guru->judul_foto) . "-" . time() . ".webp";
            $directoryPath = storage_path('app/public/guru');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0775, true, true);
            }
            $path = $directoryPath . '/' . $nama_file;
            $image = Image::read($file->getRealPath());
            $image->scaleDown(width: 1200);
            $image->toWebp(80)->save($path);
            $guru->foto = $nama_file;
        }

        if ($guru->save()) {
            return redirect()->route('guru.index')->with('berhasil', 'Guru berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Guru gagal ditambahkan 😭');
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
        $struktur = Guru::find($id);
        return view('admin.guru.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ], [
            'nama.required' => 'Nama foto harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $guru = Guru::find($id);
        $guru->nama = $request->nama;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($guru->foto) {
                Storage::delete('public/guru/' . $guru->foto);
            }

            $file = $request->file('foto');
            $nama_file = Str::slug($guru->nama) . "-" . time() . ".webp";
            $path = storage_path('app/public/guru/' . $nama_file);
            $image = Image::read($file->getRealPath());
            $image->scaleDown(width: 1200);
            $image->toWebp(80)->save($path);
            $guru->foto = $nama_file;
        }

        if ($guru->save()) {
            return redirect()->route('guru.index')->with('berhasil', 'Data guru berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Data guru gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        if ($guru->foto) {
            Storage::delete('public/guru/' . $guru->foto);
        }
        if ($guru->delete()) {
            return redirect()->route('guru.index')->with('berhasil', 'Data guru berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Data guru gagal dihapus 😭');
        }
    }

    public function landing()
    {
        $kepsek = Guru::where('jabatan', 'Kepala Sekolah')->first();
        $waka = Guru::whereLike('jabatan', 'Waka%')
            ->orderBy('nama', 'asc')->get();
        $kakomka = Guru::whereLike('jabatan', 'Kakomka%')
            ->orderBy('jabatan', 'asc')->get();
        $guru = Guru::where('jabatan', 'Guru')
            ->orderBy('nama', 'asc')->get();
        $staff = Guru::whereNotIn('jabatan', ['Kepala Sekolah', 'Guru'])
            ->whereNotLike('jabatan', 'Waka%')
            ->whereNotLike('jabatan', 'Kakomka%')
            ->orderBy('nama', 'asc')->get();

        $semuaGuru = $waka->merge($kakomka)->merge($guru)->merge($staff);

        return view('about.struktur', compact('kepsek', 'semuaGuru'));
    }
}
