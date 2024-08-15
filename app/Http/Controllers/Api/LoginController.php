<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = User::findOrfail(auth()->id());

        $token = $user->createToken('token-name')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
            'redirect' => route('dashboard'),
        ]);
    }
}
