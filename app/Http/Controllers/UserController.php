<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::select('id', 'nama', 'email')->get();
        return view('User.index', ['user' => $user]);
    }

    public function show($id)
    {
        $user_detail = User::find($id);
        return view('User.detail', ['user_detail' => $user_detail]);
    }

    public function profile($id)
    {
        $user = User::select("nama", "no_telp", "email", "foto", "level")->find($id);
        return view('User.profile', ['data' => $user, "action" => route('user.update', $id)]);
    }

    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'foto' => ['mimes:png,jpg', 'max:1024'],
        ]);
        if($request->hasFile('foto')){
            $saved_file = $request->file('foto')->store('foto_user');
            $validasiData['foto'] = $saved_file;
        } else {
            unset($validasiData['foto']);
        }
        User::find($id)->update($validasiData);
        return redirect()->route('user.index')->with('success', 'Berhasil Mengubah Data');
    }
}
