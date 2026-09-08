<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
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
        $kategori = Kategori::all();
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.galeri.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,webp',
        ], [
            'judul.required' => 'Judul harus diisi',
            'kategori_id.required' => 'Kategori harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->kategori_id = $request->kategori_id;

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
        $kategori = Kategori::all();
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,webp',
        ], [
            'judul.required' => 'Judul harus diisi',
            'kategori_id.required' => 'Kategori harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.mimes' => 'Format gambar harus png, jpg, jpeg, webp',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->kategori_id = $request->kategori_id;

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
        // 1. Ambil semua kategori beserta jumlah galerinya (untuk sidebar)
        $kategoriList = Kategori::withCount('galeri')->get();

        // 2. Hitung total semua foto galeri (untuk tombol "Semua Kategori")
        $totalGaleri = Galeri::count();

        // 3. Persiapkan Query Utama (Gunakan 'with' untuk mencegah N+1 Problem saat memanggil relasi di blade)
        $query = Galeri::with('kategori')->latest();

        // 4. Tangani Filter Kategori (berdasarkan parameter URL ?kategori=slug)
        $kategoriAktif = null;
        if ($request->has('kategori') && !empty($request->kategori)) {
            // Ambil object kategorinya utuh, bukan cuma ID-nya
            $kategoriAktif = Kategori::where('slug', $request->kategori)->first();

            if ($kategoriAktif) {
                $query->where('kategori_id', $kategoriAktif->id);
            }
        }

        // 5. Eksekusi Query dengan Paginasi (9 atau 12 pas untuk 3 kolom)
        $galeri = $query->paginate(12)->withQueryString();

        return view('gallery.index', compact('galeri', 'kategoriList', 'totalGaleri', 'kategoriAktif'));
    }
}
