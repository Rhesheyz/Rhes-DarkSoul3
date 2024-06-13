@extends('layout')

@section('content')
<h1>{{ $Game->judul }}</h1>
<p>{{ $Game->gambar }}</p>
<p>{{ $Game->link }}</p>
<a href="{{ route('games.index') }}">Back to list</a>
@endsection
