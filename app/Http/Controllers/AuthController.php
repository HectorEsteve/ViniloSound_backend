<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $data = [
                'message' => 'User authenticated successfully',
                'user' => $user
            ];
            return response()->json($data);
        } else {
            $data = [
                'message' => 'Invalid credentials',
                'user' => null
            ];
            return response()->json($data);
        }
    }

    public function verifyCredentials(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function verifyEmail(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        return response()->json(!is_null($user));
    }

    public function checkIfAdmin($userId){
        $user = User::find($userId);

        if (!$user) {
            return response()->json(false);
        }

        $isAdmin = $user->roles->contains('id', 4);
        return response()->json($isAdmin);
    }

    public function checkIfRoot($userId){
        $user = User::find($userId);

        if (!$user) {
            return response()->json(false);
        }

        $isAdmin = $user->roles->contains('id', 5);
        return response()->json($isAdmin);
    }



}
