<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginprocess(Request $request){

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('failed','Email or password you entered is wrong');
        };

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('out','You have successfully signed out');
    }

}
