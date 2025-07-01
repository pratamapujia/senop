<?php

namespace App\Http\Controllers;

use App\Models\JSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $JSiswa = JSiswa::all();
        return view('admin.jsiswa.index', compact('JSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jsiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'jurusan' => 'required',
            'total_siswa' => 'required|numeric',
        ], [
            'jurusan.required' => 'Jurusan harus diisi',
            'total_siswa.required' => 'Jumlah siswa harus diisi',
            'total_siswa.numeric' => 'Jumlah siswa harus berupa angka',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $JSiswa = new JSiswa();
        $JSiswa->jurusan = $request->jurusan;
        $JSiswa->total_siswa = $request->total_siswa;

        if ($JSiswa->save()) {
            return redirect()->route('jsiswa.index')->with('berhasil', 'Jumlah siswa berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Jumlah siswa gagal ditambahkan 😭');
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
        $JSiswa = JSiswa::find($id);
        return view('admin.jsiswa.edit', compact('JSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'jurusan' => 'required',
            'total_siswa' => 'required|numeric',
        ], [
            'jurusan.required' => 'Jurusan harus diisi',
            'total_siswa.required' => 'Jumlah siswa harus diisi',
            'total_siswa.numeric' => 'Jumlah siswa harus berupa angka',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $JSiswa = JSiswa::find($id);
        $JSiswa->jurusan = $request->jurusan;
        $JSiswa->total_siswa = $request->total_siswa;

        if ($JSiswa->save()) {
            return redirect()->route('jsiswa.index')->with('berhasil', 'Jumlah siswa berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Jumlah siswa gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $JSiswa = JSiswa::find($id);
        if ($JSiswa->delete()) {
            return redirect()->route('jsiswa.index')->with('berhasil', 'Jumlah siswa berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Jumlah siswa gagal dihapus 😭');
        }
    }
}
