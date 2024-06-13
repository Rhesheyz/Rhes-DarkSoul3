@extends('layout')

@section('content')
<h1>Edit player</h1>
<form action="{{ route('players.update', $player->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" id="gambar" value="{{ $player->gambar }}">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" value="{{ $player->judul }}">
    <label for="link">Deskripsi:</label>
    <input type="text" name="deskripsi" id="deskripsi" value="{{ $player->deskripsi }}">
    <label for="link">Link:</label>
    <input type="text" name="link" id="link" value="{{ $player->link }}">
    <button type="submit">Submit</button>
</form>
@endsection
