<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller{
    public function index(){
        $roles = Rol::all();
        $data = [
            'message' => 'Roles retrieved successfully',
            'roles' => $roles
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:roles'
        ]);

        $rol = Rol::create($request->all());
        $data = [
            'message' => 'Rol created successfully',
            'rol' => $rol
        ];
        return response()->json($data);
    }

    public function show($id){
        $rol = Rol::find($id);
        if (!$rol) {
            $data = [
                'message' => 'Rol not found',
                'rol' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Rol retrieved successfully',
            'rol' => $rol
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $rol = Rol::find($id);
        if (!$rol) {
            $data = [
                'message' => 'Rol not found',
                'rol' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id
        ]);

        $rol->update($request->all());
        $data = [
            'message' => 'Rol updated successfully',
            'rol' => $rol
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $rol = Rol::find($id);
        if (!$rol) {
            $data = [
                'message' => 'Rol not found',
                'rol' => null
            ];
            return response()->json($data);
        }

        $rol->delete();
        $data = [
            'message' => 'Rol deleted successfully',
            'rol' => $rol
        ];
        return response()->json($data);
    }
}
