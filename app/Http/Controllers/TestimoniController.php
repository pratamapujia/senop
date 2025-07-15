<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
            $nama_file = Str::slug($testimoni->nama) . "-" . time() . ".webp";
            $path = storage_path('app/public/testimoni/' . $nama_file);
            $image = Image::read($file->getRealPath());
            $image->scaleDown(width: 1200);
            $image->toWebp(80)->save($path);
            $testimoni->foto = $nama_file;
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
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama.required' => 'Nama harus diisi',
            'credit.required' => 'Credit harus diisi',
            'testimoni.required' => 'Testimoni harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
            'foto.max' => 'Ukuran foto maksimal 2MB',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $testimoni = Testimoni::find($id);
        $testimoni->nama = $request->nama;
        $testimoni->credit = $request->credit;
        $testimoni->testimoni = $request->testimoni;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($testimoni->foto) {
                Storage::delete('public/testimoni/' . $testimoni->foto);
            }

            $file = $request->file('foto');
            $nama_file = Str::slug($testimoni->nama) . "-" . time() . ".webp";
            $path = storage_path('app/public/testimoni/' . $nama_file);
            $image = Image::read($file->getRealPath());
            $image->scaleDown(width: 1200);
            $image->toWebp(80)->save($path);
            $testimoni->foto = $nama_file;
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
        if ($testimoni->foto) {
            Storage::delete('public/testimoni/' . $testimoni->foto);
        }
        if ($testimoni->delete()) {
            return redirect()->route('testimoni.index')->with('berhasil', 'testimoni berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'testimoni gagal dihapus 😭');
        }
    }
}
