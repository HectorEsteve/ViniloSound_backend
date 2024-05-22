<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Vinyl;


class CollectionController extends Controller {
    public function index() {
        $collections = Collection::with(['user', 'vinyls.format', 'vinyls.recordCompany', 'vinyls.bands', 'vinyls.songs.genre', 'vinyls.songs.band'])->get();
        $data = [
            'message' => 'Collections retrieved successfully',
            'collections' => $collections
        ];
        return response()->json($data);
    }

    public function show($id) {
        $collection = Collection::with(['user', 'vinyls.format', 'vinyls.recordCompany', 'vinyls.bands', 'vinyls.songs.genre', 'vinyls.songs.band'])->find($id);
        if (!$collection) {
            $data = [
                'message' => 'Collection not found',
                'collection' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Collection retrieved successfully',
            'collection' => $collection
        ];
        return response()->json($data);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'number_vinyls' => 'integer|min:0',
            'rating' => 'integer|min:0',
            'public' => 'boolean',
            'user_id' => 'required|exists:users,id'
        ]);

        $collection = Collection::create($request->all());
        $collection->load('vinyls');  // Cargar la relación vinyls

        $data = [
            'message' => 'Collection created successfully',
            'collection' => $collection
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $collection = Collection::find($id);
        if (!$collection) {
            $data = [
                'message' => 'Collection not found',
                'collection' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'number_vinyls' => 'integer|min:0',
            'rating' => 'integer|min:0',
            'public' => 'boolean',
            'user_id' => 'required|exists:users,id'
        ]);

        $collection->update($request->all());
        $collection->load('vinyls');

        $data = [
            'message' => 'Collection updated successfully',
            'collection' => $collection
        ];
        return response()->json($data);
    }

    public function destroy($id) {
        $collection = Collection::find($id);
        if (!$collection) {
            $data = [
                'message' => 'Collection not found',
                'collection' => null
            ];
            return response()->json($data);
        }

        $collection->delete();
        $data = [
            'message' => 'Collection deleted successfully',
            'collection' => $collection
        ];
        return response()->json($data);
    }

    public function getRandomCollections(Request $request){
        $request->validate([
            'limit' => 'required|integer|min:1|max:100',
        ]);
        $limit = $request->query('limit');
        $collections = Collection::with(['user', 'vinyls.format', 'vinyls.recordCompany', 'vinyls.bands', 'vinyls.songs.genre', 'vinyls.songs.band'])
                        ->inRandomOrder()
                        ->limit($limit)
                        ->get();

        $data = [
            'message' => $collections->isEmpty() ? 'No collections found' : 'Collections retrieved successfully',
            'collections' => $collections->isEmpty() ? [] : $collections
        ];
        return response()->json($data);
    }

    public function addVinyl(Request $request, $collectionId){
        $request->validate([
            'vinyl_id' => 'required|exists:vinyls,id',
        ]);

        $collection = Collection::find($collectionId);

        if (!$collection) {
            $data = [
                'message' => 'Collection not found',
                'collection' => null
            ];
            return response()->json($data);
        }

        $vinyl = Vinyl::find($request->vinyl_id);
        $collection->vinyls()->attach($vinyl);

        $collection->number_vinyls += 1;
        $collection->save();

        $collection->load('vinyls');

        $data = [
            'message' => 'Vinyl added to collection successfully',
            'collection' => $collection,
        ];
        return response()->json($data);
    }

    public function removeVinyl(Request $request, $collectionId){
        $request->validate([
            'vinyl_id' => 'required|exists:vinyls,id',
        ]);

        $collection = Collection::find($collectionId);

        if (!$collection) {
            $data = [
                'message' => 'Collection not found',
                'collection' => null
            ];
            return response()->json($data);
        }

        $vinyl = Vinyl::find($request->vinyl_id);
        $collection->vinyls()->detach($vinyl);

        if ($collection->number_vinyls > 0) {
            $collection->number_vinyls -= 1;
            $collection->save();
        }

        $collection->load('vinyls');

        $data = [
            'message' => 'Vinyl removed from collection successfully',
            'collection' => $collection,
        ];
        return response()->json($data);
    }
}

