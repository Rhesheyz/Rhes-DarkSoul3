@extends('layout')

@section('content')
<h1>Edit Game Serupa</h1>
<form action="{{ route('games.update', $Game->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" id="gambar" value="{{ $Game->gambar }}">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" value="{{ $Game->judul }}">
    <label for="link">Link:</label>
    <input type="text" name="link" id="link" value="{{ $Game->link }}">
    <button type="submit">Submit</button>
</form>
@endsection
