<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller{
    public function index(){
        $roles = Rol::all();
        return response()->json($roles);
    }

    public function show($id){
        $rol = Rol::findOrFail($id);
        return response()->json($rol);
    }

    public function store(Request $request){
        $rol = Rol::create($request->all());
        return response()->json($rol, 201);
    }

    public function update(Request $request, $id){
        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return response()->json($rol, 200);
    }

    public function destroy($id){
        Rol::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function usersByRol(){
    $roles = Rol::with('users')->get();
    return response()->json($roles);
    }

    public function usersByRolId($id){
    $rol = Rol::findOrFail($id);
    $users = $rol->users()->get();
    return response()->json(['rol' => $rol, 'users' => $users]);
    }
}
