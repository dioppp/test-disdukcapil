<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Handle the register request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('token-name')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ]);
    }

    /**
     * Show the register page.
     */
    public function showRegisterPage(){
        return view('auth.register');
    }
}
