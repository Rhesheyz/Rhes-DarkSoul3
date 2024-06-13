@extends('layout')

@section('content')
<h1>{{ $video->judul }}</h1>
<p>{{ $video->gambar }}</p>
<p>{{ $video->link }}</p>
<a href="{{ route('videos.index') }}">Back to list</a>
@endsection
