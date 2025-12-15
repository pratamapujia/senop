<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Cloudinary\Cloudinary;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'credit' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ], [
            'nama.required' => 'Nama harus diisi',
            'credit.required' => 'Credit harus diisi',
            'testimoni.required' => 'Testimoni harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->credit = $request->credit;
        $testimoni->testimoni = $request->testimoni;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'testimoni',
                'public_id' => Str::slug($testimoni->nama) . '-' . time(),
                'format' => 'webp',
                'quality' => 80,
                'transformation' => [
                    'width' => 320,
                    'height' => 320,
                    'aspect_ratio' => '1:1',
                    'crop' => 'fill',
                    'gravity' => 'auto'
                ]
            ]);
            $testimoni->foto = $path['secure_url'];
            $testimoni->public_id = $path['public_id'];
        }

        if ($testimoni->save()) {
            return redirect()->route('testimoni.index')->with('berhasil', 'Testimoni berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Testimoni gagal ditambahkan 😭');
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
        $testimoni = Testimoni::find($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'credit' => 'required',
            'testimoni' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg',
        ], [
            'nama.required' => 'Nama harus diisi',
            'credit.required' => 'Credit harus diisi',
            'testimoni.required' => 'Testimoni harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $testimoni = Testimoni::find($id);
        $testimoni->nama = $request->nama;
        $testimoni->credit = $request->credit;
        $testimoni->testimoni = $request->testimoni;

        if (request()->hasFile('foto')) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();

            // Hapus foto lama di Cloudinary jika ada
            if ($testimoni->public_id) {
                $uploadApi->destroy($testimoni->public_id, ['resource_type' => 'image', 'invalidate' => true]);
            }

            // Upload foto baru
            $file = $request->file('foto');
            $path = $uploadApi->upload($file->getRealPath(), [
                'folder' => 'testimoni',
                'public_id' => Str::slug($testimoni->nama) . '-' . time(),
                'format' => 'webp',
                'quality' => 80,
                'transformation' => [
                    'width' => 320,
                    'height' => 320,
                    'aspect_ratio' => '1:1',
                    'crop' => 'fill',
                    'gravity' => 'auto'
                ]
            ]);
            $testimoni->foto = $path['secure_url'];
            $testimoni->public_id = $path['public_id'];
        }

        if ($testimoni->save()) {
            return redirect()->route('testimoni.index')->with('berhasil', 'Testimoni berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Testimoni gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        if ($testimoni->public_id) {
            $cloudinary = new Cloudinary();
            $uploadApi = $cloudinary->uploadApi();
            $uploadApi->destroy($testimoni->public_id, ['resource_type' => 'image', 'invalidate' => true]);
        }
        if ($testimoni->delete()) {
            return redirect()->route('testimoni.index')->with('berhasil', 'testimoni berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'testimoni gagal dihapus 😭');
        }
    }
}
