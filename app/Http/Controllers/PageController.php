<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $data = [
            ['nama' => 'Item A', 'kategori' => 'Kategori 1'],
            ['nama' => 'Item B', 'kategori' => 'Kategori 2'],
            ['nama' => 'Item C', 'kategori' => 'Kategori 3'],
        ];
        return view('pengelolaan', compact('data', 'username'));
    }
}
