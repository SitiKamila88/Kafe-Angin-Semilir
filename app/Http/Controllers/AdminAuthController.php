<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function loginForm()
    {
        // Cek jika sudah login, langsung lempar ke dashboard
        if (Session::has('admin_logged_in')) {
            return redirect()->route('admin.menu.index');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Logika Login Sederhana
        if ($request->username === 'admin' && $request->password === 'admin123') {
            
            // 1. Simpan Sesi Login
            Session::put('admin_logged_in', true);
            
            // 2. ARAHKAN KE HALAMAN "SUCCESS" (POPUP)
            // Ini kuncinya! Jangan langsung ke menu.index
            return redirect()->route('admin.login.success');
        }

        // Jika Gagal
        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}