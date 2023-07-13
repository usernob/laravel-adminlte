<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    protected $FIELD = [
        'nama' => ['required', 'string', 'max:255'],
        'alamat' => ['required', 'string', 'max:255'],
        'no_telp' => ['required', 'string', 'max:255'],
        'foto' => ['mimes:png,jpg', 'max:1024'],
        'program_id' => ['required', 'integer'],
        'pdf_sertifikat' => ['mimes:pdf', 'max:1024'],
        'pdf_nilai' => ['mimes:pdf', 'max:1024'],
    ];

    protected $files = ['foto', 'pdf_sertifikat', 'pdf_nilai'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::select('id', 'nama', 'alamat', 'program_id')
            ->with('program')
            ->get();
        return view('Siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::all();
        return view('Siswa.form', ['data' => [], 'programs' => $program, 'action' => route('siswa.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validasiData = $request->validate($this->FIELD);
        foreach ($this->files as $file) {
            if ($request->hasFile($file)) {
                $saved_file = $request->file($file)->store($file == 'foto' ? 'foto_siswa' : $file);
                $validasiData[$file] = $saved_file;
            } else {
                unset($validasiData[$file]);
            }
        }

        //Lanjut proses simpan
        Siswa::create($validasiData);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa_detail = Siswa::with('program')->findOrFail($id);
        return view('Siswa.detail', ['siswa_detail' => $siswa_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::findOrFail($id);
        $program = Program::all();
        return view('Siswa.form', ['data' => $data, 'programs' => $program, 'action' => route('siswa.update', $id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        array_unshift($this->FIELD['foto'], 'nullable');
        array_unshift($this->FIELD['pdf_sertifikat'], 'nullable');
        array_unshift($this->FIELD['pdf_nilai'], 'nullable');
        $validasiData = $request->validate($this->FIELD);

        foreach ($this->files as $file) {
            if ($request->hasFile($file)) {
                Storage::delete($siswa->$file);
                $saved_file = $request->file($file)->store($file == 'foto' ? 'foto_siswa' : $file);
                $validasiData[$file] = $saved_file;
            } else {
                unset($validasiData[$file]);
            }
        }
        $siswa->update($validasiData);
        return redirect()
            ->route('siswa.index')
            ->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::findOrFail($id);
        foreach ($this->files as $file) {
            Storage::delete($data->$file);
        }
        $data->delete();
        return redirect()
            ->route('siswa.index')
            ->with('success', 'Berhasil Menghapus Data');
    }

    public function countSiswaByProgram()
    {
        $count = Siswa::select("program_id")->with("program")->get()->countBy("program.nama_program");
        return json_decode($count);
    }
}
