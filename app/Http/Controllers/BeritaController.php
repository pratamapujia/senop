<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
        $kategori = Kategori::all(); // Ambil semua kategori dari model Kategori
        return view('admin.berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // --- TINGKATKAN LIMIT PHP SEMENTARA ---
        ini_set('max_execution_time', 900); // Batas eksekusi menjadi 900 detik (15 menit)
        ini_set('memory_limit', '512M');    // Batas RAM dinaikkan menjadi 512 MB

        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp',
            'konten' => 'required',
            // 'status' => 'required|in:draft,review,published'
        ], [
            'judul.required' => 'Judul berita harus diisi.',
            'kategori_id.required' => 'Kategori berita harus dipilih.',
            'gambar.required' => 'Gambar berita harus diunggah.',
            'gambar.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus berupa jpeg, png, jpg, atau webp.',
            'konten.required' => 'Konten berita harus diisi.',
            // 'status.required' => 'Status berita harus dipilih.',
            // 'status.in' => 'Status berita tidak valid.'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul);
        $berita->kategori_id = $request->kategori_id;
        $berita->konten = $request->konten;
        $berita->user_id = Auth::user()->id;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = Str::slug($berita->judul) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/berita');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(854, 480, 'center');
            $image->save($path, 90, 'webp');
            $berita->gambar = $filename;
        }

        if ($berita->save()) {
            if ($request->has('masukkan_galeri') && $request->masukkan_galeri == '1') {
                // Buat data Galeri menggunakan path gambar yang SAMA
                Galeri::create([
                    'judul'       => $request->judul,
                    'deskripsi'   => Str::limit(strip_tags($request->konten), 100),
                    'kategori_id' => $request->kategori_id, // <-- KUNCI: Langsung panggil ID yang sama
                    'gambar'      => $filename
                ]);
            }
            return redirect()->route('dm-berita.index')->with('success', 'Berita berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan berita. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.berita.show', compact('berita', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.berita.edit', compact('berita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // --- TINGKATKAN LIMIT PHP SEMENTARA ---
        ini_set('max_execution_time', 900); // Batas eksekusi menjadi 900 detik (15 menit)
        ini_set('memory_limit', '512M');    // Batas RAM dinaikkan menjadi 512 MB

        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'konten' => 'required',
            'status' => 'required|in:draft,review,published'
        ], [
            'judul.required' => 'Judul berita harus diisi.',
            'kategori_id.required' => 'Kategori berita harus dipilih.',
            'konten.required' => 'Konten berita harus diisi.',
            'status.required' => 'Status berita harus dipilih.',
            'status.in' => 'Status berita tidak valid.'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul);
        $berita->kategori_id = $request->kategori_id;
        $berita->konten = $request->konten;
        $berita->status = $request->status;
        $berita->user_id = Auth::user()->id;

        if ($request->hasFile('gambar')) {
            // Hapus foto lama jika ada
            if ($berita->gambar && File::exists(storage_path('app/public/berita/' . $berita->gambar))) {
                File::delete(storage_path('app/public/berita/' . $berita->gambar));
            }
            $file = $request->file('gambar');
            $filename = Str::slug($berita->judul) . '-' . time() . '.' . 'webp';
            $directoryPath = storage_path('app/public/berita');
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }
            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());
            $image->cover(854, 480, 'center');
            $image->save($path, 90, 'webp');
            $berita->gambar = $filename;
        }

        if ($berita->save()) {
            return redirect()->route('dm-berita.index')->with('success', 'Berita berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui berita. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($berita->gambar) {
            $imagePath = storage_path('app/public/berita/' . $berita->gambar);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        if ($berita->delete()) {
            return redirect()->route('dm-berita.index')->with('success', 'Berita berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus berita. Silakan coba lagi.');
        }
    }

    public function updateStatus(Request $request, Berita $berita)
    {
        $request->validate([
            'status' => 'required|in:draft,review,published'
        ]);

        $berita->update([
            'status' => $request->status
        ]);

        $pesan = $request->status == 'published' ? 'Berita berhasil diterbitkan!' : 'Berita dikembalikan ke Draft.';
        return redirect()->route('dm-berita.index')->with('success', $pesan);
    }

    public function beritaLanding(Request $request)
    {
        // 1. Query Berita & Fitur Pencarian
        $query = Berita::with('author')->where('status', 'published');

        if ($request->has('q') && !request('q') == '') {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }

        $berita = $query->latest('created_at')->paginate(9)->withQueryString();

        // 2. Ambil Semua Kategori + Jumlah berita per kategorinya (menggunakan withCount)
        $kategoriList = Kategori::withCount(['berita' => function ($query) {
            $query->where('status', 'published');
        }])->get();

        // 3. Hitung total semua berita untuk widget "Semua Kategori"
        $totalBerita = Berita::where('status', 'published')->count();

        // Kirim $kategoriList dan $totalBerita ke view
        return view('news.index', compact('berita', 'kategoriList', 'totalBerita'));
    }

    public function category($slug)
    {
        // 1. Ambil data 1 kategori yang sedang dibuka
        $kategori = Kategori::where('slug', $slug)->firstOrFail();

        // 2. Query Berita berdasarkan kategori tersebut
        $berita = Berita::with('author')
            ->where('status', 'published')
            ->where('kategori_id', $kategori->id)
            ->latest()
            ->paginate(9);

        // 3. Ambil Semua Kategori untuk Sidebar Widget (sama seperti di beritaLanding)
        $kategoriList = \App\Models\Kategori::withCount(['berita' => function ($query) {
            $query->where('status', 'published');
        }])->get();

        $totalBerita = \App\Models\Berita::where('status', 'published')->count();

        // Kirim $kategori (kategori aktif), $kategoriList (semua kategori), dll ke view
        return view('news.index', compact('berita', 'kategori', 'kategoriList', 'totalBerita'));
    }

    public function detailBerita($slug)
    {
        // Ambil data berita yang sedang dibuka
        $berita = Berita::with('author')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Cari berita SEBELUMNYA (Tanggal/Waktu lebih LAMA dari berita saat ini)
        $prevBerita = Berita::where('created_at', '<', $berita->created_at)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc') // Urutkan dari yang paling mendekati waktu saat ini mundur
            ->first();

        // Cari berita SELANJUTNYA (Tanggal/Waktu lebih BARU dari berita saat ini)
        $nextBerita = Berita::where('created_at', '>', $berita->created_at)
            ->where('status', 'published')
            ->orderBy('created_at', 'asc') // Urutkan dari yang paling mendekati waktu saat ini maju
            ->first();

        return view('news.detail', compact('berita', 'prevBerita', 'nextBerita'));
    }
}
