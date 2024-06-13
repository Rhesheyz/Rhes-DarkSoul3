@extends('layout')

@section('content')
<h1>Edit berita</h1>
<form action="{{ route('beritas.update', $berita->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" id="gambar" value="{{ $berita->gambar }}">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" value="{{ $berita->judul }}">
    <label for="link">Link:</label>
    <input type="text" name="link" id="link" value="{{ $berita->link }}">
    <button type="submit">Submit</button>
</form>
@endsection
