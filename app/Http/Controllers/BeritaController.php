<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('beritas.index', compact('beritas'));
    }

    public function create()
    {
        return view('beritas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);

        Berita::create($request->all());

        return redirect()->route('beritas.index')->with('success', 'Berita created successfully.');
    }

    public function show(Berita $berita)
    {
        return view('beritas.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('beritas.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);

        $berita->update($request->all());

        return redirect()->route('beritas.index')->with('success', 'Berita updated successfully.');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita deleted successfully.');
    }
}
