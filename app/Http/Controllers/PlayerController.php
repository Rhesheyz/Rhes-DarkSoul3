<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = player::all();
        return view('players.index', compact('players'));
    }


  

    public function show(player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, player $player)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
            'deskripsi' => 'required|string|max:1000'
        ]);

        $player->update($request->all());

        return redirect()->route('players.index')->with('success', 'player updated successfully.');
    }

    public function destroy(player $player)
    {
        $player->delete();

        return redirect()->route('players.index')->with('success', 'player deleted successfully.');
    }
}
