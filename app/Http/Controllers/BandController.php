<?php
namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller{
    public function index(){
        $bands = Band::with(['songs' => function ($query) {
            $query->with('genre');
        }])->get();

        $data = [
            'message' => 'Bands retrieved successfully',
            'bands' => $bands
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:bands',
            'members_count' => 'required|integer|min:1',
            'members' => 'nullable',
            'formation_year' => 'required|digits:4',
            'country' => 'required|max:255',
        ]);

        $band = Band::create($request->all());
        $data =[
            'message' => 'Band created successfully',
            'band' => $band
        ];
        return response()->json($data);
    }

    public function show($id) {
        $band = Band::with(['songs.genre', 'songs.band'])->find($id);

        if (!$band) {
            $data = [
                'message' => 'Band not found',
                'band' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Band retrieved successfully',
            'band' => $band
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $band = Band::find($id);
        if (!$band) {
            $data = [
                'message' => 'Band not found',
                'band' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|unique:bands,name,'.$id,
            'members_count' => 'required|integer|min:1',
            'members' => 'nullable|array',
            'formation_year' => 'required|digits:4',
            'country' => 'required|max:255',
        ]);

        $band->update($request->all());
        $data = [
            'message' => 'Band updated successfully',
            'band' => $band
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $band = Band::find($id);
        if (!$band) {
            $data = [
                'message' => 'Band not found',
                'band' => null
            ];
            return response()->json($data);
        }

        $band->delete();
        $data = [
            'message' => 'Band deleted successfully',
            'band' => $band
        ];
        return response()->json($data);
    }

    public function getRandomBands(Request $request){
        $request->validate([
            'limit' => 'required|integer|min:1|max:100',
        ]);
        $limit = $request->query('limit');

        $bands = Band::with(['songs' => function ($query) {
            $query->with('genre');
        }])->inRandomOrder()->limit($limit)->get();

        $data = [
            'message' => $bands->isEmpty() ? 'No bands found' : 'Bands retrieved successfully',
            'bands' => $bands->isEmpty() ? [] : $bands
        ];
        return response()->json($data);
    }
}
