<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Placeholder routes for other pages (to be expanded later)
Route::get('/profil', function () {
    return 'Halaman Profil (Coming Soon)';
});

Route::get('/bidang-studi/{slug?}', function ($slug = null) {
    return 'Halaman Bidang Studi: ' . ($slug ?? 'All');
});

Route::get('/layanan/{slug?}', function ($slug = null) {
    return 'Halaman Layanan: ' . ($slug ?? 'All');
});

Route::get('/karya-siswa', function () {
    return 'Halaman Karya Siswa (Coming Soon)';
});

Route::get('/testimoni', function () {
    return 'Halaman Testimoni (Coming Soon)';
});

Route::get('/artikel', function () {
    return 'Halaman Artikel (Coming Soon)';
});

Route::get('/artikel/{slug}', function ($slug) {
    return 'Detail Artikel: ' . $slug;
});

Route::get('/hubungi-kami', function () {
    return 'Halaman Hubungi Kami (Coming Soon)';
});
