<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Models\LayananJasa;
use App\Models\Section;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Ambil data untuk halaman beranda
        $banners = Banner::where('status', true)
                    ->orderBy('urutan')
                    ->get();

        $about = Section::where('kode', 'about_us')
                    ->where('status', true)
                    ->first();

        $services = LayananJasa::where('status', true)
                    ->orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        $testimonies = Testimoni::where('status', true)
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();

        $articles = Artikel::where('status', true)
                    ->orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        $promo = Section::where('kode', 'promo')
                    ->where('status', true)
                    ->first();

        return view('frontend.home', compact(
            'banners',
            'about',
            'services',
            'testimonies',
            'articles',
            'promo'
        ));
    }

    // Function lain untuk halaman lainnya akan dibuat nanti
}
