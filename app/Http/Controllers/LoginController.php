<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login', [
            'title' => 'Login Form'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);
        
        Alert::success('Login Berhasil!', 'Silahkan melakukan absensi sesuai dengan jadwal yang sudah ditentukan!');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to the intended URL or to the dashboard
            return redirect()->intended('/');
        }

        return redirect('/login')->with('loginError', 'Login failed. Invalid credentials.');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
