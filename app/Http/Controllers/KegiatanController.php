<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatans.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('kegiatans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
        ]);

        Kegiatan::create($request->all());

        return redirect()->route('kegiatans.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatans.show', compact('kegiatan'));
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatans.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
        ]);

        $kegiatan->update($request->all());

        return redirect()->route('kegiatans.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatans.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
