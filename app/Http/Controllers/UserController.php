<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
    public function index(){
        $users = User::with('roles', 'collection')->get();
        $data = [
            'message' => 'Users retrieved successfully',
            'users' => $users
        ];
        return response()->json($data);
    }

    public function show($id){
        $user = User::with('roles', 'collection')->find($id);
        if (!$user) {
            $data = [
                'message' => 'User not found',
                'user' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'User retrieved successfully',
            'user' => $user
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:4',
            'points' => 'integer|min:0',
        ]);

        $encryptedPassword = bcrypt($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $encryptedPassword,
            'points' => $request->points ?? 0,
        ]);

        $user->roles()->attach(1);

        $data = [
            'message' => 'User created successfully',
            'user' => $user
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        if (!$user) {
            $data = [
                'message' => 'User not found',
                'user' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|string',
        ]);

        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        } else {
            unset($input['password']);
        }

        $user->update($input);

        $data = [
            'message' => 'User updated successfully',
            'user' => $user
        ];

        return response()->json($data);
    }

    public function destroy($id){
        $user = User::find($id);
        if (!$user) {
            $data = [
                'message' => 'User not found',
                'user' => null
            ];
            return response()->json($data);
        }
        $user->delete();
        $data = [
            'message' => 'User deleted successfully',
            'user' => $user
        ];
        return response()->json($data);
    }
}
