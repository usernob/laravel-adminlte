<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $siswa_count = Siswa::count();
        return view('Dashboard.index', ['user_count' => $user_count, 'siswa_count' => $siswa_count]);
    }
}
