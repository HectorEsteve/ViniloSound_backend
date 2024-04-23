<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index(){
        return Band::all();
    }

    public function store(Request $request){
        return Band::create($request->all());
    }

    public function show($id){
        return Band::findOrFail($id);
    }

    public function update(Request $request, $id){
        $band = Band::findOrFail($id);
        $band->update($request->all());
        return $band;
    }

    public function destroy($id){
        $band = Band::findOrFail($id);
        $band->delete();
        return response()->json(['message' => 'Band deleted successfully'], 200);
    }

    public function indexWithDetails(){
        $bands = Band::with('songs.vinyls')->get();
        return $bands;
    }

    public function showWithDetails($id){
        $band = Band::findOrFail($id);
        $songs = $band->songs()->with('vinyls')->get();
        return $songs;
    }

}
