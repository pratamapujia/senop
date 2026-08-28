<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::latest()->get();
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
        $validasi = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,webp',
        ], [
            'judul.required' => 'Judul harus diisi',
            'kategori.required' => 'Kategori harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = Str::slug($galeri->judul) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/berita');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(800, 450, 'top');
            $image->save($path, 90, 'webp');
            $galeri->gambar = $filename;
        }

        if ($galeri->save()) {
            return redirect()->route('dm-galeri.index')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Data gagal disimpan');
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
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,webp',
        ], [
            'judul.required' => 'Judul harus diisi',
            'kategori.required' => 'Kategori harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $dipakaiDiBerita = Berita::where('gambar', $galeri->gambar)->exists();
            // Hapus gambar dari storage jika ada
            if (!$dipakaiDiBerita) {
                $imagePath = storage_path('app/public/berita/' . $galeri->gambar);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $file = $request->file('gambar');
            $filename = Str::slug($galeri->judul) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/berita');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(800, 450, 'top');
            $image->save($path, 90, 'webp');
            $galeri->gambar = $filename;
        }

        if ($galeri->save()) {
            return redirect()->route('dm-galeri.index')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $dipakaiDiBerita = Berita::where('gambar', $galeri->gambar)->exists();
        // Hapus gambar dari storage jika ada
        if (!$dipakaiDiBerita) {
            $imagePath = storage_path('app/public/berita/' . $galeri->gambar);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        if ($galeri->delete()) {
            return redirect()->route('dm-galeri.index')->with('success', 'Galeri berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus galeri. Silakan coba lagi.');
        }
    }

    public function galeriLanding(Request $request)
    {
        // Cek apakah ada filter kategori dari URL (misal: /galeri?kategori=Fasilitas)
        $kategoriAktif = $request->query('kategori');

        // Query dasar
        $query = Galeri::latest();

        // Terapkan filter jika ada
        if ($kategoriAktif) {
            $query->where('kategori', $kategoriAktif);
        }

        // Ambil data dengan paginasi (misal 12 foto per halaman untuk 4 kolom x 3 baris)
        $galeri = $query->paginate(12)->withQueryString();

        return view('gallery.index', compact('galeri', 'kategoriAktif'));
    }
}
