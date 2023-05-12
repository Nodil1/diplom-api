<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {

    }

    public function login(Request $request)
    {
        $user = User::where("name", $request->input("login"))->first();
        if (Hash::check($request->input("password"), $user->password)) {
            Auth::login($user, true);
            return response()->json([
                "token" => Auth::user()->createToken("token", )->plainTextToken,
                "id" => Auth::user()->id
            ]);
        }
        return response()->json(["message" => "Неверный логин или пароль"]);

    }
}
