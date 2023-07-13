<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            // 'foto' => 'foto_siswa/' . $this->faker->image('./storage/app/public/foto_siswa', 400, 400, 'people', false),
            // 'program_id' => $this->faker->randomElement(['Kuliah Digital Marketing 1 Tahun', 'Kursus Singkat Digital Marketing 6 Hari Bersertifikat BNSP', 'In House Training Digital Marketing', 'Kursus Google Ads', 'Kursus TikTok Ads', 'Kursus Intensif SEO', 'Kursus WordPress', 'Kursus Pemrograman Laravel', 'Kursus Konten Kreator', 'Kursus Desain Grafis', 'Kursus Intensif Fotografi Untuk Pemasaran Digital', 'Kursus Intensif Videografi Untuk Pemasaran Digital', 'Kursus FB Ads', 'Paket Kursus FB Ads, Google Ads, SEO', 'Paket Kursus Fb Ads, Google Ads, SEO, WordPress']),
            // 'harga_program' => $this->faker->randomNumber(6, true),
            // 'pdf_sertifikat' => 'pdf_sertifikat/' . $this->faker->file('./public/template', './storage/app/public/pdf_sertifikat', false),
            // 'pdf_nilai' => 'pdf_nilai/' . $this->faker->file('./public/template', './storage/app/public/pdf_nilai', false),
        ];
    }
}
