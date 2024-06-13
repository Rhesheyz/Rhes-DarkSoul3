@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Videos</h1>
    <a href="{{ route('videos.create') }}" class="px-6 py-4 whitespace-nowrap border-b border-gray-200">|&nbspCreate New Video&nbsp|</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Judul
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Gambar
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Link
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ route('videos.show', $video->id) }}" class="text-blue-500 hover:underline">{{ $video->judul }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <img src="{{ $video->gambar }}" alt="{{ $video->judul }}" class="w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ $video->link }}" class="text-blue-500 hover:underline">{{ $video->link }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('videos.edit', $video->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                <h2>&nbsp&nbsp</h2>
                                <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" text-red-500 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
