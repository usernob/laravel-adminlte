<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::all();
        return view('Program.index', ['program' => $program]);
    }

    public function create()
    {
        return view('Program.form', ['data' => [], 'action' => route('program.store')]);
    }

    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama_program' => ['required', 'string', 'max:255'],
            'harga_program' => ['required', 'integer'],
        ]);
        Program::create($validasiData);
        return redirect()
            ->route('program.index')
            ->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('Program.form', ['data' => $program, 'action' => route('program.update', $id)]);
    }

    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'nama_program' => ['required', 'string', 'max:255'],
            'harga_program' => ['required', 'integer'],
        ]);
        Program::findOrFail($id)->update($validasiData);
        return redirect()
            ->route('program.index')
            ->with('success', 'Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        if ($program->siswa()->count() > 0) {
            return redirect()
                ->route('program.index')
                ->with('error', 'Data tidak dapat dihapus karena ada siswa yang memilih program ini');
        }
        $program->delete();
        return redirect()
            ->route('program.index')
            ->with('success', 'Berhasil Menghapus Data');
    }
}
