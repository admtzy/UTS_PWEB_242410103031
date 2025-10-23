<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function keLogin(Request $request)
    {
        $username = strtolower($request->username);
        $password = $request->password;

        if ($username === 'adam' && $password === 'adam') {
            $request->session()->put('username', $username);
            return redirect()->route('dashboard');
        }

        return view('login', [
            'error' => 'Username atau password salah!'
        ]);
    }


    public function profile(Request $request)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('error', 'User belum login.');
        }

        $profile = [
            'nama' => ($user),
            'usia' => 35,
            'lokasi' => 'Banyuwangi',
            'lahan' => '400 hektar',
            'komoditas' => 'Padi, Jagung, Cabai'
        ];

        return view('profile', [
            'username' => ($user),
            'profile' => $profile,
        ]);
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
