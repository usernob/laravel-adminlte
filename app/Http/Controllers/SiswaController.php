<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::select('id', 'nama', 'mengikuti_program')->get();
        return view('Siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.add');
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
        $validasiData = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:255'],
            'foto' => ['mimes:png,jpg', 'max:1024'],
            'mengikuti_program' => ['required', 'string', 'max:255'],
            'harga_program' => ['required', 'string', 'max:255'],
            'pdf_sertifikat' => ['mimes:pdf', 'max:1024'],
            'pdf_nilai' => ['mimes:pdf', 'max:1024'],
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto')->store('foto_siswa');

            $validasiData['foto'] = $file;
        } else {
            return redirect()
                ->back()
                ->withErrors(['foto' => 'File foto tidak valid.'])
                ->withInput();
        }
        // Validasi pdf_sertifikat berhasil, lanjutkan dengan penyimpanan file ke folder pdf_sertifikat
        if ($request->hasFile('pdf_sertifikat')) {
            $file = $request->file('pdf_sertifikat')->store('pdf_sertifikat');

            $validasiData['pdf_sertifikat'] = $file;
        } else {
            return redirect()
                ->back()
                ->withErrors(['pdf_sertifikat' => 'File pdf tidak valid.'])
                ->withInput();
        }

        // Validasi pdf_nilai berhasil, lanjutkan dengan penyimpanan file ke folder pdf_nilai
        if ($request->hasFile('pdf_nilai')) {
            $file = $request->file('pdf_nilai')->store('pdf_nilai');

            $validasiData['pdf_nilai'] = $file;
        } else {
            return redirect()
                ->back()
                ->withErrors(['pdf_nilai' => 'File pdf tidak valid.'])
                ->withInput();
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
        $siswa_detail = Siswa::find($id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
