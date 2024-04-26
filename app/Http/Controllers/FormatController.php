<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Format;

class FormatController extends Controller{
    public function index(){
        $formats = Format::all();
        $data = [
            'message' => 'Formats retrieved successfully',
            'formats' => $formats
        ];
        return response()->json($data);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:formats',
            'diameter' => 'required|integer|min:1',
            'rpm' => 'required',
            'duration_side' => 'required|integer|min:1',
        ]);

        $format = Format::create($request->all());
        $data = [
            'message' => 'Format created successfully',
            'format' => $format
        ];
        return response()->json($data);
    }

    public function show($id){
        $format = Format::find($id);
        if (!$format) {
            $data = [
                'message' => 'Format not found',
                'format' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Format retrieved successfully',
            'format' => $format
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $format = Format::find($id);
        if (!$format) {
            $data = [
                'message' => 'Format not found',
                'format' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|unique:formats,name,'.$id,
            'diameter' => 'required|integer|min:1',
            'rpm' => 'required',
            'duration_side' => 'required|integer|min:1',
        ]);

        $format->update($request->all());
        $data = [
            'message' => 'Format updated successfully',
            'format' => $format
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $format = Format::find($id);
        if (!$format) {
            $data = [
                'message' => 'Format not found',
                'format' => null
            ];
            return response()->json($data);
        }

        $format->delete();
        $data = [
            'message' => 'Format deleted successfully',
            'format' => $format
        ];
        return response()->json($data);
    }
}
