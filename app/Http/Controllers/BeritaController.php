<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
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
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp',
            'konten' => 'required',
            // 'status' => 'required|in:draft,review,published'
        ], [
            'judul.required' => 'Judul berita harus diisi.',
            'kategori.required' => 'Kategori berita harus dipilih.',
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
        $berita->judul = $request->input('judul');
        $berita->slug = Str::slug($request->input('judul'));
        $berita->kategori = $request->input('kategori');
        $berita->konten = $request->input('konten');
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
            $image->cover(800, 450, 'top');
            $image->save($path, 90, 'webp');
            $berita->gambar = $filename;
        }

        if ($berita->save()) {
            if ($request->has('masukkan_galeri') && $request->masukkan_galeri == '1') {
                // Memetakan kategori Berita ke kategori Galeri
                // (Bisa disesuaikan dengan kebutuhan Anda)
                $kategoriGaleri = 'Kegiatan';
                if ($request->kategori == 'Agenda') $kategoriGaleri = 'Kegiatan';
                if ($request->kategori == 'Prestasi') $kategoriGaleri = 'Prestasi';
                if ($request->kategori == 'Ekskul') $kategoriGaleri = 'Ekstrakurikuler';

                // Buat data Galeri menggunakan path gambar yang SAMA
                Galeri::create([
                    'judul' => $request->judul,
                    // Mengambil 100 karakter pertama dari isi berita sebagai deskripsi galeri
                    'deskripsi' => Str::limit(strip_tags($request->konten), 100),
                    'kategori' => $kategoriGaleri,
                    'gambar' => $filename // <-- KUNCI: Path gambar tidak di-upload ulang
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
        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'konten' => 'required',
            'status' => 'required|in:draft,review,published'
        ], [
            'judul.required' => 'Judul berita harus diisi.',
            'kategori.required' => 'Kategori berita harus dipilih.',
            'konten.required' => 'Konten berita harus diisi.',
            'status.required' => 'Status berita harus dipilih.',
            'status.in' => 'Status berita tidak valid.'
        ]);
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->input('judul');
        $berita->slug = Str::slug($request->input('judul'));
        $berita->kategori = $request->input('kategori');
        $berita->konten = $request->input('konten');
        $berita->status = $request->input('status');
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
            $image->cover(800, 450, 'top');
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
        // Fitur Pencarian (Search) yang sudah ada di widget sebelumnya
        $query = Berita::with('author')->where('status', 'published');

        if ($request->has('q') && !empty($request->q)) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }

        $berita = $query->latest()->paginate(9)->withQueryString();
        return view('news.index', compact('berita'));
    }

    public function category($kategori)
    {
        $berita = Berita::with('author')
            ->where('status', 'published')
            ->where('kategori', $kategori)
            ->latest()
            ->paginate(9);

        return view('news.index', compact('berita', 'kategori'));
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
