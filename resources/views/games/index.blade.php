@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Game Serupa</h1>
    <a href="{{ route('games.create') }}" class="px-6 py-4 whitespace-nowrap border-b border-gray-200">|&nbspCreate New game&nbsp|</a>
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
                @foreach ($games as $game)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ route('games.show', $game->id) }}" class="text-blue-500 hover:underline">{{ $game->judul }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <img src="{{ $game->gambar }}" alt="{{ $game->judul }}" class="w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ $game->link }}" class="text-blue-500 hover:underline">{{ $game->link }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('games.edit', $game->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                <h2>&nbsp&nbsp</h2>
                                <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="inline-block">
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
