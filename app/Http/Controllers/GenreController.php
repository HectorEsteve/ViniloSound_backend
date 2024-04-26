<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        $data = [
            'message' => 'Genres retrieved successfully',
            'genres' => $genres
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:genres,name'
        ]);

        $genre = Genre::create($request->all());
        $data = [
            'message' => 'Genre created successfully',
            'genre' => $genre
        ];
        return response()->json($data);
    }

    public function show($id){
        $genre = Genre::find($id);
        if (!$genre) {
            $data = [
                'message' => 'Genre not found',
                'genre' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Genre retrieved successfully',
            'genre' => $genre
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $genre = Genre::find($id);
        if (!$genre) {
            $data = [
                'message' => 'Genre not found',
                'genre' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string|unique:genres,name,' . $id
        ]);

        $genre->update($request->all());
        $data = [
            'message' => 'Genre updated successfully',
            'genre' => $genre
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $genre = Genre::find($id);
        if (!$genre) {
            $data = [
                'message' => 'Genre not found',
                'genre' => null
            ];
            return response()->json($data);
        }

        $genre->delete();
        $data = [
            'message' => 'Genre deleted successfully',
            'genre' => $genre
        ];
        return response()->json($data);
    }
}
