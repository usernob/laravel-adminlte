<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('Auth.login');
    }
    public function register() {
        return view('Auth.register');
    }
    public function prosesRegister(Request $request) {
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
        return redirect()->back()->withErrors(['foto' => 'File foto tidak valid.'])->withInput();
      }
      User::create($validasiData);

      return redirect()->route('auth.login')->with('success', 'Berhasil Menambahkan Data');
    }
}
