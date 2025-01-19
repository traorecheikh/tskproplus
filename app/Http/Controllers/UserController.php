<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function Login(Request $request)
    {
        if($request->isMethod("POST")){
            $validated = $request->validate([
                "email"=>"unique|email",
                "password"=>"min:4",
            ]);
            if(Auth::attempt(["email"=>$validated["email"], "password"=>$validated["password"],])){
                Session::regenerate();
                return redirect()->intended("/login");
            }
        }
        return view("auth.login");
    }

    public function Register(Request $request)
    {
        if($request->isMethod("POST")){
            $Validated = $request->validate([
               "email"=>"unique|email",
               "password"=>"min:4",
               "fname"=>"min:2",
               "lname"=>"min:2"
            ]);
            User::create($Validated);
            return redirect()->route("user.login")->with("succes","Inscription Reussie");
        }
        return view("auth.register");
    }
}
