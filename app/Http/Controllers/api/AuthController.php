<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function auth(Request $request){
        $user = User::where("email", $request->email)->first();
        if(!$user && !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                "status" => "error",
                "message" => "Credentials is invalid."
            ]);
        }

        //gerar um token para usuario elegivel
        $token = $user->createToken($request->deviceName)->plainTextToken;

        return response()->json([
            "token" => $token
        ]);
    }
}
