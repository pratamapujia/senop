<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

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
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tempat.required' => 'Tempat harus diisi.',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $agenda = new Agenda();
        $agenda->judul = $request->input('judul');
        $agenda->deskripsi = Purifier::clean($request->input('deskripsi'));
        $agenda->tanggal = $request->input('tanggal');
        $agenda->tempat = $request->input('tempat');

        if ($agenda->save()) {
            return redirect()->route('dm-agenda.index')->with('success', 'Data agenda berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Data agenda gagal ditambahkan.');
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
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'tempat.required' => 'Tempat harus diisi.',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $agenda = Agenda::findOrFail($id);
        $agenda->judul = $request->input('judul');
        $agenda->deskripsi = Purifier::clean($request->input('deskripsi'));
        $agenda->tanggal = $request->input('tanggal');
        $agenda->tempat = $request->input('tempat');

        if ($agenda->save()) {
            return redirect()->route('dm-agenda.index')->with('success', 'Data agenda berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Data agenda gagal diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::findOrFail($id);

        if ($agenda->delete()) {
            return redirect()->route('dm-agenda.index')->with('success', 'Data agenda berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data agenda gagal dihapus.');
        }
    }

    public function agendaLanding()
    {
        $agenda = Agenda::orderBy('tanggal', 'asc')->paginate(6);
        return view('event.index', compact('agenda'));
    }
}
