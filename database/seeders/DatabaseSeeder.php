<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'no_telp' => '08123456789',
            'level' => 'admin',
        ]);
        // \App\Models\User::factory(10)->create();
        foreach ($this->default_programs as $program) {
            $prog = Program::create($program);
            $prog->siswa()->saveMany(
                Siswa::factory()
                    ->count(rand(2, 15))
                    ->make(),
            );
        }
    }
}
