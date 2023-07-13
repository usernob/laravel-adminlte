<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'siswa';

    protected $fillable = ['nama', 'alamat', 'no_telp', 'foto', 'program_id', 'pdf_sertifikat', 'pdf_nilai'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
