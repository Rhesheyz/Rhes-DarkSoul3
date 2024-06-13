@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Player</h1>
  
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Nama
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        Deskripsi
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
                @foreach ($players as $player)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ route('players.show', $player->id) }}" class="text-blue-500 hover:underline">{{ $player->judul }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ route('players.show', $player->id) }}" class="text-blue-500 hover:underline">{{ $player->deskripsi }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <img src="{{ $player->gambar }}" alt="{{ $player->judul }}" class="w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <a href="{{ $player->link }}" class="text-blue-500 hover:underline">{{ $player->link }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('players.edit', $player->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                <h2>&nbsp&nbsp</h2>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
