<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $siswa_count = Siswa::count();
        $program_count = Program::count();
        $income = Siswa::select('program_id')->with('program')->get()->sum("program.harga_program");
        return view('Dashboard.index', compact("user_count", "siswa_count", "program_count", "income"));
    }
}
