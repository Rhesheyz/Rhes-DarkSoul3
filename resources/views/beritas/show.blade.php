@extends('layout')

@section('content')
<h1>{{ $berita->judul }}</h1>
<p>{{ $berita->gambar }}</p>
<p>{{ $berita->link }}</p>
<a href="{{ route('beritas.index') }}">Back to list</a>
@endsection
