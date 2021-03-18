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
        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];
        if (Auth::attempt($credentials)) {
            // regenerate session ID,regenarate session ID เพราะ อาจถูกโจมตี   
                // redirect to the requested URL or
                // to route product if does not specify
                /* product = URL not route */
                session()->regenerate();   
                return redirect()->intended(route('homepage')); 
            }
        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    function logout() {
        Auth::logout();
        session()->invalidate(); // will delete data in session ในส่วนที่เกี่ยวกับ user เท่านั้น
        session()->regenerateToken(); // regenerate CSRF token
        return redirect()->route('login');
    }
}
