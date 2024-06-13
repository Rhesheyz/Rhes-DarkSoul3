@extends('layout')

@section('content')
<h1>Create New player Serupa</h1>
<form action="{{ route('players.store') }}" method="POST">
    @csrf
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" id="gambar">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" id="judul">
    <label for="link">Link:</label>
    <input type="text" name="link" id="link">
    <button type="submit">Submit</button>
</form>
@endsection
