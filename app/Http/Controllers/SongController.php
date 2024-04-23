<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return response()->json($songs);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'lyrics' => 'required|string',
            'band_id' => 'required|exists:bands,id',
            'genre_id' => 'nullable|exists:genres,id',
            'video_url' => 'nullable|string',
            'audio_url' => 'nullable|string',
        ]);

        $song = Song::create($request->all());
        return response()->json($song, 201);
    }

    public function show($id){
        $song = Song::findOrFail($id);
        return response()->json($song);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'lyrics' => 'required|string',
            'band_id' => 'required|exists:bands,id',
            'genre_id' => 'nullable|exists:genres,id',
            'video_url' => 'nullable|string',
            'audio_url' => 'nullable|string',
        ]);

        $song = Song::findOrFail($id);
        $song->update($request->all());
        return response()->json($song, 200);
    }

    public function destroy($id){
        $song = Song::findOrFail($id);
        $song->delete();
        return response()->json(null, 204);
    }

    public function indexWithDetails(){
        $songs = Song::with('genre', 'band', 'vinyls')->get();
        return response()->json($songs);
    }

    public function showWithDetails($id){
    $song = Song::with('genre', 'band', 'vinyls')->find($id);
        if (!$song) {
            return response()->json(['message' => 'Canción no encontrada'], 404);
        }
        return response()->json($song);
    }
}
