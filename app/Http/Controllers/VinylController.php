<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class VinylController extends Controller{
    public function index(){
        $vinyls = Vinyl::all();
        return response()->json($vinyls);
    }

    public function show($id){
        $vinyl = Vinyl::find($id);
        if (!$vinyl) {
            return response()->json(['message' => 'Vinyl not found'], 404);
        }
        return response()->json($vinyl);
    }

    public function store(Request $request){
        $vinyl = new Vinyl();
        $vinyl->fill($request->all());
        $vinyl->save();
        return response()->json($vinyl, 201);
    }

    public function update(Request $request, $id){
        $vinyl = Vinyl::find($id);
        if (!$vinyl) {
            return response()->json(['message' => 'Vinyl not found'], 404);
        }
        $vinyl->fill($request->all());
        $vinyl->save();
        return response()->json($vinyl);
    }

    public function destroy($id){
        $vinyl = Vinyl::find($id);
        if (!$vinyl) {
            return response()->json(['message' => 'Vinyl not found'], 404);
        }
        $vinyl->delete();
        return response()->json(['message' => 'Vinyl deleted']);
    }

    public function collectionsByVinyls(){
        $vinyls = Vinyl::with('collections')->get();
        return response()->json($vinyls);
    }

    public function collectionsByVinyl($id){
        $vinyl = Vinyl::with('collections')->findOrFail($id);
        return response()->json($vinyl);
    }

    public function indexWithDetails(){
        $vinyls = Vinyl::with('collections', 'bands', 'songs', 'format', 'recordCompany')->get();
        return response()->json($vinyls);
    }

    public function showWithDetails($id){
        $vinyl = Vinyl::with('collections', 'bands', 'songs', 'format', 'recordCompany')->findOrFail($id);
        return response()->json($vinyl);
    }
}

