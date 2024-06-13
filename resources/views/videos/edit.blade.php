@extends('layout')

@section('content')
<h1>Edit Video</h1>
<form action="{{ route('videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" id="gambar" value="{{ $video->gambar }}">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul" value="{{ $video->judul }}">
    <label for="link">Link:</label>
    <input type="text" name="link" id="link" value="{{ $video->link }}">
    <button type="submit">Submit</button>
</form>
@endsection
