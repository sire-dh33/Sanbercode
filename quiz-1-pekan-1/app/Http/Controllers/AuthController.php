<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
  
  public function register(Request $request)
  {
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email|email:rfc,dns',
        'password' => 'required|confirmed|min:6',
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    return response()->json([
        'message' => 'Berhasil register',
    ]);
  }

  public function login()
  {
       $credentials = request(['email', 'password']);

       if (! $token = auth()->attempt($credentials)) {
           return response()->json(['error' => 'Unauthorized'], 401);
       }

       return $this->respondWithToken($token);
  }

  protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }


}
