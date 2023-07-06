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
}
