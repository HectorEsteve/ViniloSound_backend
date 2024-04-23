<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller{
    public function index(){
        $collections = Collection::all();
        return response()->json($collections);
    }

    public function show($id){
        $collection = Collection::find($id);
        if (!$collection) {
            return response()->json(['message' => 'Collection not found'], 404);
        }
        return response()->json($collection);
    }

    public function store(Request $request) {
        $collection = new Collection();
        $collection->fill($request->all());
        $collection->save();
        return response()->json($collection, 201);
    }

    public function update(Request $request, $id){
        $collection = Collection::find($id);
        if (!$collection) {
            return response()->json(['message' => 'Collection not found'], 404);
        }
        $collection->fill($request->all());
        $collection->save();
        return response()->json($collection);
    }

    public function destroy($id){
        $collection = Collection::find($id);
        if (!$collection) {
            return response()->json(['message' => 'Collection not found'], 404);
        }
        $collection->delete();
        return response()->json(['message' => 'Collection deleted']);
    }

    public function indexWithDetails(){
        $collections = Collection::with('user', 'vinyls')->get();
        return response()->json($collections);
    }

    public function showWithDetails($id){
        $collection = Collection::with('user', 'vinyls')->findOrFail($id);
        return response()->json($collection);
    }
}
