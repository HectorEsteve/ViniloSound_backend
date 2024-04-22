<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Format;

class FormatController extends Controller{
    public function index(){
        $formats = Format::all();
        return response()->json($formats);
    }

    public function show($id){
        $format = Format::find($id);
        if (!$format) {
            return response()->json(['message' => 'Format not found'], 404);
        }
        return response()->json($format);
    }

    public function store(Request $request){
        $format = new Format();
        $format->fill($request->all());
        $format->save();
        return response()->json($format, 201);
    }

    public function update(Request $request, $id){
        $format = Format::find($id);
        if (!$format) {
            return response()->json(['message' => 'Format not found'], 404);
        }
        $format->fill($request->all());
        $format->save();
        return response()->json($format);
    }

    public function destroy($id){
        $format = Format::find($id);
        if (!$format) {
            return response()->json(['message' => 'Format not found'], 404);
        }
        $format->delete();
        return response()->json(['message' => 'Format deleted']);
    }
}
