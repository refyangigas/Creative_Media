<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'judul' => 'Tentang Kami',
                'kode' => 'about_us',
                'konten' => '<p>Creative Media merupakan Digital Agency & IT Consultant di Surabaya...</p>',
                'status' => true,
            ],
            [
                'judul' => 'Layanan Kami',
                'kode' => 'services',
                'konten' => '<p>IT & Multimedia Training, Branding & Design, Web Development & Mobile Apps Development</p>',
                'status' => true,
            ],
            [
                'judul' => 'Promo Spesial',
                'kode' => 'promo',
                'konten' => '<p>Dapatkan promo spesial bulan ini</p>',
                'status' => true,
            ],
        ];

        foreach ($sections as $section) {
            Section::updateOrCreate(['kode' => $section['kode']], $section);
        }
    }
}
