<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'foto',
        'mengikuti_program',
        'harga_program',
        'pdf_sertifikat',
        'pdf_nilai',
    ];
}
