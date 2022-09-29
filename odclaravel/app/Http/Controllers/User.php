<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function login(){
        return view("login");
    }

    public function loginrequest(Request $request){
        $data = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        if(Auth::attempt($data)){
            return redirect("student/create");
        }
        return redirect("login");
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}
