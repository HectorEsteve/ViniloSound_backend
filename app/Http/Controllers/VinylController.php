<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class VinylController extends Controller{
    public function index(){
        $vinyls = Vinyl::with(['format', 'recordCompany', 'bands', 'songs.genre', 'songs.band'])->get();

        $data = [
            'message' => 'Vinyls retrieved successfully',
            'vinyls' => $vinyls
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'publication_year' => 'required|integer',
            'edition_year' => 'nullable|integer',
            'format_id' => 'nullable|exists:formats,id',
            'record_company_id' => 'nullable|exists:record_companies,id',
            'cover_url' => 'nullable|string',
            'song_ids' => 'nullable|array', // Validación para los IDs de las canciones
            'band_ids' => 'nullable|array', // Validación para los IDs de los grupos
        ]);

        $vinyl = Vinyl::create($request->except('song_ids', 'band_ids'));

        // Asociar canciones al vinilo
        if ($request->has('song_ids')) {
            $vinyl->songs()->attach($request->input('song_ids'));
        }

        // Asociar grupos al vinilo
        if ($request->has('band_ids')) {
            $vinyl->bands()->attach($request->input('band_ids'));
        }

        $data = [
            'message' => 'Vinyl created successfully',
            'vinyl' => $vinyl
        ];
        return response()->json($data);
    }

    public function show($id){
        $vinyl = Vinyl::with('format', 'recordCompany', 'bands', 'songs.genre', 'songs.band')->find($id);
        if (!$vinyl) {
            $data = [
                'message' => 'Vinyl not found',
                'vinyl' => null
            ];
            return response()->json($data, 404);
        }

        $data = [
            'message' => 'Vinyl retrieved successfully',
            'vinyl' => $vinyl
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $vinyl = Vinyl::find($id);
        if (!$vinyl) {
            $data = [
                'message' => 'Vinyl not found',
                'vinyl' => null
            ];

            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string',
            'publication_year' => 'required|integer',
            'edition_year' => 'nullable|integer',
            'format_id' => 'nullable|exists:formats,id',
            'record_company_id' => 'nullable|exists:record_companies,id',
            'cover_url' => 'nullable|string',
        ]);

        $vinyl->update($request->all());
        $vinyl = Vinyl::with('format', 'recordCompany', 'bands', 'songs.genre', 'songs.band')->find($id);
        $data = [
            'message' => 'Vinyl updated successfully',
            'vinyl' => $vinyl
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $vinyl = Vinyl::find($id);

        if (!$vinyl) {
            $data = [
                'message' => 'Vinyl not found',
                'vinyl' => null
            ];
            return response()->json($data, 404);
        }

        $vinyl->delete();
        $data = [
            'message' => 'Vinyl deleted successfully',
            'vinyl' => $vinyl
        ];
        return response()->json($data);
    }

    public function getRandomVinyls(Request $request){
        $request->validate([
            'limit' => 'required|integer|min:1|max:100',
        ]);
        $limit = $request->query('limit');

        $vinyls = Vinyl::with(['format', 'recordCompany', 'bands', 'songs.genre', 'songs.band'])
                        ->inRandomOrder()
                        ->limit($limit)
                        ->get();
        $data = [
            'message' => $vinyls->isEmpty() ? 'No vinyls found' : 'Vinyls retrieved successfully',
            'vinyls' => $vinyls->isEmpty() ? [] : $vinyls
        ];
        return response()->json($data);
    }
}


