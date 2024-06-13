<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')->with('success', 'Game created successfully.');
    }

    public function show(Game $Game)
    {
        return view('games.show', compact('Game'));
    }

    public function edit(Game $Game)
    {
        return view('games.edit', compact('Game'));
    }

    public function update(Request $request, Game $Game)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);

        $Game->update($request->all());

        return redirect()->route('games.index')->with('success', 'Game updated successfully.');
    }

    public function destroy(Game $Game)
    {
        $Game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}
