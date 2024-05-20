<?php
namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller{
    public function index(){
        $songs = Song::with('genre', 'band')->get();
        $data = [
            'message' => 'Songs retrieved successfully',
            'songs' => $songs
        ];
        return response()->json($data);
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
        $data = [
            'message' => 'Song created successfully',
            'song' => $song
        ];
        return response()->json($data);
    }

    public function show($id){
        $song = Song::with('genre', 'band')->find($id);
        if (!$song) {
            $data = [
                'message' => 'Song not found',
                'song' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Song retrieved successfully',
            'song' => $song
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $song = Song::find($id);
        if (!$song) {
            $data = [
                'message' => 'Genre not found',
                'song' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'lyrics' => 'required|string',
            'band_id' => 'required|exists:bands,id',
            'genre_id' => 'nullable|exists:genres,id',
            'video_url' => 'nullable|string',
            'audio_url' => 'nullable|string',
        ]);

        $song->update($request->all());
        $data = [
            'message' => 'Song updated successfully',
            'song' => $song
        ];

        return response()->json($data);
    }

    public function destroy($id){
        $song = Song::findOrFail($id);
        $song->delete();

        $data = [
            'message' => 'Song deleted successfully',
            'song' => $song
        ];

        return response()->json($data);
    }

    public function getRandomSongs(Request $request){
        $request->validate([
            'limit' => 'required|integer|min:1|max:100',
        ]);
        $limit = $request->query('limit');
        $songs = Song::with('genre', 'band')->inRandomOrder()->limit($limit)->get();
        if ($songs->isEmpty()) {
            $data = [
                'message' => 'No songs found',
                'songs' => []
            ];
        } else {
            $data = [
                'message' => 'Songs retrieved successfully',
                'songs' => $songs
            ];
        }
        return response()->json($data);
    }

}
