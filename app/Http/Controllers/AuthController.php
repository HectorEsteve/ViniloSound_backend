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
}
