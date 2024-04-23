<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:genres,name'
        ]);

        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    public function show($id){
        $genre = Genre::findOrFail($id);
        return response()->json($genre);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|unique:genres,name,' . $id
        ]);

        $genre = Genre::findOrFail($id);
        $genre->update($request->all());
        return response()->json($genre, 200);
    }

    public function destroy($id){
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return response()->json(null, 204);
    }

    public function songsByGenres(){
        $genres = Genre::with('songs')->get();
        return response()->json($genres);
    }

    public function songsByGenre($id){
        $genre = Genre::with('songs')->findOrFail($id);
        return response()->json($genre);
    }
}
