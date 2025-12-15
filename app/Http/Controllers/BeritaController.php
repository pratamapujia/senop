<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Cloudinary\Cloudinary;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
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
        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            'berita' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'penulis' => 'required',
            'tanggal' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'berita.required' => 'Berita harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'penulis.required' => 'Penulis harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->berita = $request->berita;
        $berita->penulis = $request->penulis;
        $berita->credit = $request->credit;
        $berita->tanggal = $request->tanggal;
        $berita->slug = Str::slug($request->judul);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'berita',
                'public_id' => Str::slug($berita->judul),
                'format' => 'webp',
                'quality' => 80,
                'transformation' => [
                    'width' => 1200,
                    'height' => 800,
                    'aspect_ratio' => '16:9',
                    'crop' => 'fill',
                    'gravity' => 'auto'
                ]
            ]);

            $berita->foto = $path['secure_url'];
            $berita->public_id = $path['public_id'];
        }

        if ($berita->save()) {
            return redirect()->route('berita.index')->with('berhasil', 'Berita berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Berita gagal ditambahkan 😭');
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
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            'berita' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'penulis' => 'required',
            'tanggal' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'berita.required' => 'Berita harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'penulis.required' => 'Penulis harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->berita = $request->berita;
        $berita->penulis = $request->penulis;
        $berita->credit = $request->credit;
        $berita->tanggal = $request->tanggal;
        $berita->slug = Str::slug($request->judul);

        if (request()->hasFile('foto')) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();

            // Hapus foto lama di Cloudinary jika ada
            if ($berita->public_id) {
                $uploadApi->destroy($berita->public_id, ['resource_type' => 'image', 'invalidate' => true]);
            }

            // Upload foto baru
            $file = $request->file('foto');
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'berita',
                'public_id' => Str::slug($berita->judul),
                'format' => 'webp',
                'quality' => 80,
                'transformation' => [
                    'width' => 1200,
                    'height' => 800,
                    'aspect_ratio' => '16:9',
                    'crop' => 'fill',
                    'gravity' => 'auto'
                ]
            ]);
            $berita->foto = $path['secure_url'];
            $berita->public_id = $path['public_id'];
        }

        if ($berita->save()) {
            return redirect()->route('berita.index')->with('berhasil', 'Berita berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Berita gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::find($id);

        if ($berita->public_id) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $uploadApi->destroy($berita->public_id, ['resource_type' => 'image', 'invalidate' => true]);
        }

        if ($berita->delete()) {
            return redirect()->route('berita.index')->with('berhasil', 'Berita berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Berita gagal dihapus 😭');
        }
    }

    public function landing()
    {
        $berita = Berita::latest()->paginate(8);
        return view('program.berita', compact('berita'));
    }
}
