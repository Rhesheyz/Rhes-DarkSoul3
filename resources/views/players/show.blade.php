@extends('layout')

@section('content')
<h1>{{ $player->judul }}</h1>
<p>{{ $player->gambar }}</p>
<p>{{ $player->link }}</p>
<a href="{{ route('players.index') }}">Back to list</a>
@endsection
