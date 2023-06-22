<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function prosesRegister(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => ['required', 'string'],
            'no_telp' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);
        $validasiData['password'] = Hash::make($validasiData['password']);
        $validasiData['level'] = 'admin';
        if ($request->hasFile('foto')) {
            $file = $request->file('foto')->store('user');
            $validasiData['foto'] = $file;
        } else {
            return redirect()
                ->back()
                ->withErrors(['foto' => 'File foto tidak valid.'])
                ->withInput();
        }
        User::create($validasiData);

        return redirect()
            ->route('auth.login')
            ->with('success', 'Berhasil Menambahkan Data');
    }
    public function otentikasi(Request $request)
    {
        $validasiData = $request->validate(
            [
                'email' => ['required', 'email', 'max:255'],
                'password' => ['required', 'min:6'],
            ],
            [
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Email harus benar.',
                'email.max' => 'Email tidak boleh melebihi :max karakter.',
                'password.required' => 'Password harus diisi.',
                'password.min' => 'Password minimal :min karakter.',
            ],
        );
        if (Auth::attempt($validasiData)) {
            $request->session()->regenerate();
            return redirect(route('dashboard.index'))->with('success', 'Berhasil Login');
        } else {
            return redirect(route('auth.login'))
                ->withErrors(['auth_failed' => 'Email atau password salah.'])
                ->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'))->with('success', 'Berhasil Logout');
    }
}
