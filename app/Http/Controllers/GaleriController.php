<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Cloudinary\Cloudinary;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
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
        $validasi = Validator::make($request->all(), [
            'judul_foto' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ], [
            'judul_foto.required' => 'Judul foto harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = new Galeri();
        $galeri->judul_foto = $request->judul_foto;


        if ($request->hasFile('foto')) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $file = $request->file('foto');
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'galeri',
                'public_id' => Str::slug($galeri->judul_foto),
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
            $galeri->foto = $path['secure_url'];
            $galeri->public_id = $path['public_id'];
        }

        if ($galeri->save()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal ditambahkan 😭');
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
        $galeri = Galeri::find($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'judul_foto' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ], [
            'judul_foto.required' => 'Judul foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $galeri = Galeri::find($id);
        $galeri->judul_foto = $request->judul_foto;

        if (request()->hasFile('foto')) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();

            // Hapus foto lama di Cloudinary jika ada
            if ($galeri->public_id) {
                $uploadApi->destroy($galeri->public_id, ['resource_type' => 'image', 'invalidate' => true]);
            }

            // Upload foto baru
            $file = $request->file('foto');
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'galeri',
                'public_id' => Str::slug($galeri->judul_foto),
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
            $galeri->foto = $path['secure_url'];
            $galeri->public_id = $path['public_id'];
        }

        if ($galeri->save()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::find($id);

        if ($galeri->public_id) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $uploadApi->destroy($galeri->public_id, ['resource_type' => 'image', 'invalidate' => true]);
        }

        if ($galeri->delete()) {
            return redirect()->route('galeri.index')->with('berhasil', 'Galeri berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Galeri gagal dihapus 😭');
        }
    }

    public function landing()
    {
        $galeri = Galeri::latest()->paginate(8);
        return view('program.galeri', compact('galeri'));
    }
}
