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
            'foto' => 'foto_siswa/yg3N3HCOiNwTxH4Z6aMnIHRK6uUiC7BGPucKl76u.png',
            'mengikuti_program' => $this->faker->randomElement(['Kuliah Digital Marketing 1 Tahun', 'Kursus Singkat Digital Marketing 6 Hari Bersertifikat BNSP', 'In House Training Digital Marketing', 'Kursus Google Ads', 'Kursus TikTok Ads', 'Kursus Intensif SEO', 'Kursus WordPress', 'Kursus Pemrograman Laravel', 'Kursus Konten Kreator', 'Kursus Desain Grafis', 'Kursus Intensif Fotografi Untuk Pemasaran Digital', 'Kursus Intensif Videografi Untuk Pemasaran Digital', 'Kursus FB Ads', 'Paket Kursus FB Ads, Google Ads, SEO', 'Paket Kursus Fb Ads, Google Ads, SEO, WordPress']),
            'harga_program' => $this->faker->randomNumber(6, true),
            'pdf_sertifikat' => 'pdf_sertifikat/PVod6zoLuCIKgmSXkQbwdPtsZvCAnOwMICRAupu1.pdf',
            'pdf_nilai' => 'pdf_nilai/c3rJAdsb4AH3OTX8EeKVEq4CCmebdptP3mtkJJ7c.pdf',
        ];
    }
}
