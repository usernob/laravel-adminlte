<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $default_programs = [
        ['nama_program' => 'Kuliah Digital Marketing 1 Tahun', 'harga_program' => '199999'],
        ['nama_program' => 'Kursus Singkat Digital Marketing 6 Hari Bersertifikat BNSP', 'harga_program' => '299999'],
        ['nama_program' => 'In House Training Digital Marketing', 'harga_program' => '399999'],
        ['nama_program' => 'Kursus Google Ads', 'harga_program' => '499999'],
        ['nama_program' => 'Kursus TikTok Ads', 'harga_program' => '599999'],
        ['nama_program' => 'Kursus Intensif SEO', 'harga_program' => '699999'],
        ['nama_program' => 'Kursus WordPress', 'harga_program' => '799999'],
        ['nama_program' => 'Kursus Pemrograman Laravel', 'harga_program' => '899999'],
        ['nama_program' => 'Kursus Konten Kreator', 'harga_program' => '999999'],
        ['nama_program' => 'Kursus Desain Grafis', 'harga_program' => '1099999'],
        ['nama_program' => 'Kursus Intensif Fotografi Untuk Pemasaran Digital', 'harga_program' => '1199999'],
        ['nama_program' => 'Kursus Intensif Videografi Untuk Pemasaran Digital', 'harga_program' => '1299999'],
        ['nama_program' => 'Kursus FB Ads', 'harga_program' => '1399999'],
        ['nama_program' => 'Paket Kursus FB Ads, Google Ads, SEO', 'harga_program' => '1499999'],
        ['nama_program' => 'Paket Kursus Fb Ads, Google Ads, SEO, WordPress', 'harga_program' => '1599999'],
    ];
    public function run()
    {
        foreach ($this->default_programs as $program) {
            $prog = Program::create($program);
            $prog->siswa()->saveMany(
                Siswa::factory()
                    ->count(3)
                    ->make(),
            );
        }
    }
}
