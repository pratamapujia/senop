<?php

namespace App\Http\Controllers;

use App\Models\Agenda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_agenda' => 'required',
            'keterangan' => 'required',
        ], [
            'nama_agenda.required' => 'Nama agenda harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $agenda = new Agenda();
        $agenda->nama_agenda = $request->nama_agenda;
        $agenda->keterangan = $request->keterangan;

        if ($agenda->save()) {
            return redirect()->route('agenda.index')->with('berhasil', 'Agenda berhasil ditambahkan 👍');
        } else {
            return redirect()->back()->with('gagal', 'Agenda gagal ditambahkan 😭');
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
        $agenda = Agenda::find($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama_agenda' => 'required',
            'keterangan' => 'required',
        ], [
            'nama_agenda.required' => 'Nama agenda harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $agenda = Agenda::find($id);
        $agenda->nama_agenda = $request->nama_agenda;
        $agenda->keterangan = $request->keterangan;

        if ($agenda->save()) {
            return redirect()->route('agenda.index')->with('berhasil', 'Agenda berhasil diubah 👍');
        } else {
            return redirect()->back()->with('gagal', 'Agenda gagal diubah 😭');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::find($id);

        if ($agenda->delete()) {
            return redirect()->back()->with('berhasil', 'Agenda berhasil dihapus 👍');
        } else {
            return redirect()->back()->with('gagal', 'Agenda gagal dihapus 😭');
        }
    }

    // Controller untuk halaman agenda di landing page
    public function landing()
    {
        $agenda = Agenda::latest()->paginate(6);
        return view('program.agenda', compact('agenda'));
    }
}
