<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CobaController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        //validasi terlebih dahulu pada form login
        $credentials =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        //jika validasi berhasil lakukan
        // if(Auth::attempt(($credentials))) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
        // return back()->with('loginError', 'login gagal');

        if (Auth::guard('user')->attempt(($credentials))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } elseif (Auth::guard('dosen')->attempt(($credentials))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } elseif (Auth::guard('mahasiswa')->attempt(($credentials))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('Pesan', 'Email atau password yang Anda masukan salah !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
