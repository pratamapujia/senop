<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.jurusan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kategori_id'    => 'required|exists:kategori,id',
            'kode_jurusan'   => 'required|unique:jurusan,kode_jurusan',
            'nama_jurusan'   => 'required|string|max:255',
            'deskripsi_hero' => 'nullable|string',
            'konten'         => 'required|string',
            'peluang_kerja'  => 'nullable|array',
            'peluang_kerja.*' => 'nullable|string',
        ], [
            'kategori_id.required' => 'Kategori harus diisi',
            'kategori_id.exists' => 'Kategori tidak valid',
            'kode_jurusan.required' => 'Kode jurusan harus diisi',
            'kode_jurusan.unique' => 'Kode jurusan sudah digunakan',
            'nama_jurusan.required' => 'Nama jurusan harus diisi',
            'konten.required' => 'Konten jurusan harus diisi',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $jurusan = new Jurusan();
        $jurusan->kategori_id = $request->kategori_id;
        $jurusan->kode_jurusan = $request->kode_jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi_hero = $request->deskripsi_hero;
        $jurusan->konten = $request->konten;
        $jurusan->peluang_kerja = $this->cleanPeluang($request);
        $jurusan->save();

        $this->handleGaleriUpload($request, $jurusan);

        return redirect()->route('dm-jurusan.index')->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        $viewName = 'jurusan.' . strtolower($jurusan->kode_jurusan);

        // Fallback kalau file blade untuk jurusan ini belum dibuat
        if (!view()->exists($viewName)) {
            abort(404, 'Halaman untuk jurusan ini belum tersedia.');
        }

        $galeri = Galeri::where('kategori_id', $jurusan->kategori_id)
            ->latest() // ambil 1 foto terbaru untuk foto praktek di sidebar
            ->get();
        return view($viewName, compact('jurusan', 'galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($jurusan->id, $jurusan->toArray());
        $kategori = Kategori::all();
        $jurusan = Jurusan::with('galeri')->findOrFail($id);

        // Foto galeri yang sudah terhubung ke kategori jurusan ini
        $galeriTerkait = Galeri::where('kategori_id', $jurusan->kategori_id)->latest()->get();

        return view('admin.jurusan.edit', compact('jurusan', 'kategori', 'galeriTerkait'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'kategori_id'    => 'required|exists:kategori,id',
            'kode_jurusan'   => 'required|unique:jurusan,kode_jurusan,' . $id,
            'nama_jurusan'   => 'required|string|max:255',
            'deskripsi_hero' => 'nullable|string',
            'konten'         => 'required|string',
            'peluang_kerja'  => 'nullable|array',
            'peluang_kerja.*' => 'nullable|string',
        ], [
            'kategori_id.required' => 'Kategori harus diisi',
            'kategori_id.exists' => 'Kategori tidak valid',
            'kode_jurusan.required' => 'Kode jurusan harus diisi',
            'kode_jurusan.unique' => 'Kode jurusan sudah digunakan',
            'nama_jurusan.required' => 'Nama jurusan harus diisi',
            'konten.required' => 'Konten jurusan harus diisi',
        ]);

        if (!$validasi) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->kategori_id = $request->kategori_id;
        $jurusan->kode_jurusan = $request->kode_jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->deskripsi_hero = $request->deskripsi_hero;
        $jurusan->konten = $request->konten;
        $jurusan->peluang_kerja = $this->cleanPeluang($request);
        $jurusan->save();

        $this->handleGaleriUpload($request, $jurusan);

        return redirect()->route('dm-jurusan.index')->with('success', 'Data jurusan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect()->route('dm-jurusan.index')->with('success', 'Jurusan berhasil dihapus.');
    }

    private function cleanPeluang(Request $request): array
    {
        return collect($request->input('peluang_kerja', []))
            ->filter(fn($item) => trim((string) $item) !== '')
            ->values()
            ->toArray();
    }

    private function handleGaleriUpload(Request $request, Jurusan $jurusan): void
    {
        if (!$request->hasFile('foto_galeri')) {
            return;
        }

        $directoryPath = storage_path('app/public/berita');

        if (!File::isDirectory($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        // 1. OPSI: Hapus foto-foto galeri lama yang terhubung ke jurusan ini 
        // (jika Anda ingin menggantinya secara total dengan yang baru diunggah)
        $galeriLama = Galeri::where('kategori_id', $jurusan->kategori_id)->get();
        foreach ($galeriLama as $itemLama) {
            $oldPath = $directoryPath . '/' . $itemLama->gambar;
            // Periksa apakah file fisiknya ada di penyimpanan, lalu hapus
            if ($itemLama->gambar && File::exists($oldPath)) {
                File::delete($oldPath);
            }
            // Hapus record-nya dari database tabel galeri
            $itemLama->delete();
        }

        // 2. Proses unggah foto-foto yang baru
        foreach ($request->file('foto_galeri') as $file) {
            $filename = Str::slug($jurusan->nama_jurusan)
                . '-' . time()
                . '-' . Str::random(5)
                . '.webp';

            $path = $directoryPath . '/' . $filename;
            $image = Image::decode($file->getRealPath());

            // Catatan: Pastikan parameter cover sesuai dokumentasi Intervention Image Anda (lebar, tinggi)
            $image->save($path, 90, 'webp');

            Galeri::create([
                'kategori_id' => $jurusan->kategori_id,
                'judul'       => 'Dokumentasi ' . $jurusan->nama_jurusan,
                'gambar'      => $filename,
            ]);
        }
    }
}
