<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);
    
        Video::create($request->all());
    
        return redirect()->route('videos.index')->with('success', 'Video created successfully.');
    }
    
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'gambar' => 'required|string|max:10000',
            'judul' => 'required|string|max:1000',
            'link' => 'required|string|max:1000',
        ]);
    
        $video->update($request->all());
    
        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }
    
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

   

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
