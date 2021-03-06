<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginForm() {
        return view('login-form');
    }

    function authenticate(Request $request) {
        $data = $request->getParsedBody();
        $userLogin = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];
        if (Auth::attempt($userLogin)) {
            session()->regenerate();   
            return redirect()->intended(route('homepage')); 
        }
        return redirect()->route('login')->withErrors(['emailOrPass' => 'Your Email or Password wrong , Please try againg']);
    }

    function logout() {
        Auth::logout();
        session()->invalidate(); // will delete data in session ในส่วนที่เกี่ยวกับ user เท่านั้น
        session()->regenerateToken(); // regenerate CSRF token
        return redirect()->route('login');
    }
}
