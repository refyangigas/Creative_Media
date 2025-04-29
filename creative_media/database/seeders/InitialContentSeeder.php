<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\LayananJasa;
use App\Models\Section;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class InitialContentSeeder extends Seeder
{
    public function run()
    {
        // Banner default (Anda perlu menambahkan gambar sendiri)
        Banner::create([
            'judul' => 'Kursus & Pelatihan IT Multimedia',
            'deskripsi' => 'Tingkatkan skill dengan kursus IT & Multimedia pilihan bersama Creative Media yang berpengalaman',
            'button_text' => 'INFO KURSUS',
            'button_link' => '/bidang-studi',
            'urutan' => 1,
            'status' => true,
        ]);

        // Section untuk About Us
        Section::create([
            'judul' => 'Tentang Kami',
            'kode' => 'about_us',
            'konten' => '<p>Creative Media merupakan Digital Agency & IT Consultant di Surabaya. Kami memberikan layanan kursus, branding & design, web development, dan app development.</p><p>Hanya kami yang <strong>BERANI</strong> memberikan <strong>GARANSI 100%</strong> Sampai Bisa!</p>',
            'status' => true,
        ]);

        // Section untuk Promo
        Section::create([
            'judul' => 'Promo Spesial Bulan Ini',
            'kode' => 'promo',
            'konten' => '<p>DAPATKAN PROMO SPESIAL BULAN INI<br>INFO: 082131314040 / 082131310210</p>',
            'status' => true,
        ]);

        // Layanan Jasa
        $layanan = [
            [
                'nama' => 'Course & Trainings',
                'slug' => 'course-trainings',
                'kategori' => 'Course & Training',
                'deskripsi' => 'Program pelatihan IT & Multimedia dengan metode praktik langsung.',
                'konten' => '<p>Kursus IT & Multimedia kami telah terbukti menghasilkan lulusan dengan skill yang siap kerja.</p>',
                'status' => true,
            ],
            [
                'nama' => 'Branding & Design',
                'slug' => 'branding-design',
                'kategori' => 'Branding & Design',
                'deskripsi' => 'Layanan desain dan branding untuk meningkatkan citra bisnis Anda.',
                'konten' => '<p>Layanan desain logo, branding, dan material marketing untuk bisnis Anda.</p>',
                'status' => true,
            ],
            [
                'nama' => 'Web Development',
                'slug' => 'web-development',
                'kategori' => 'Web Development',
                'deskripsi' => 'Pembuatan website profesional dengan teknologi terkini.',
                'konten' => '<p>Layanan pembuatan website company profile, e-commerce, sistem berbasis web, dan lainnya.</p>',
                'status' => true,
            ],
            [
                'nama' => 'Mobile Apps Development',
                'slug' => 'mobile-apps',
                'kategori' => 'Mobile Apps',
                'deskripsi' => 'Pengembangan aplikasi mobile untuk Android dan iOS.',
                'konten' => '<p>Layanan pembuatan aplikasi mobile Android, iOS, dan aplikasi hybrid.</p>',
                'status' => true,
            ],
        ];

        foreach ($layanan as $item) {
            LayananJasa::create($item);
        }

        // Testimoni
        $testimoni = [
            [
                'nama' => 'Dian Kartika',
                'jabatan' => 'Alumnus Graphic Design',
                'perusahaan' => 'The Premium Studio',
                'testimoni' => 'One of the best web training providers. The tools that I use. Would definitely recommend it to other front-end developer. Thank u and keep up the excellent work!',
                'status' => true,
            ],
            [
                'nama' => 'Budi Pranata',
                'jabatan' => 'Alumnus Web Dev Batch',
                'perusahaan' => 'PT. Elang Media',
                'testimoni' => 'Terima kasih creative media telah memberikan ilmu yang bermanfaat, sekarang saya sudah kerja di startup IT Surabaya dengan gaji di atas rata-rata.',
                'status' => true,
            ],
        ];

        foreach ($testimoni as $item) {
            Testimoni::create($item);
        }
    }
}
