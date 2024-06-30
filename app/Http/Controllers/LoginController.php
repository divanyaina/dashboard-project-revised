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

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->level == 'pemilik') {
                return redirect()->route('home-pemilik');
            }
            else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Email atau password yang Anda masukkan salah');
        };
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('out','You have successfully signed out');
    }

}
