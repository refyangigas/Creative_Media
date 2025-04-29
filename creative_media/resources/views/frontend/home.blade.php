@extends('layouts.main')

@section('content')
    <!-- Banner/Slider -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->gambar) }}" class="d-block w-100" alt="{{ $banner->judul }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>{{ $banner->judul }}</h2>
                        <p>{{ $banner->deskripsi }}</p>
                        @if ($banner->button_text)
                            <a href="{{ $banner->button_link }}" class="btn btn-primary">{{ $banner->button_text }}</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2>OUR SERVICES</h2>
                    <p>IT & Multimedia Training, Branding & Design, Web Development & Mobile Apps Development</p>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-3">
                        <div class="service-card">
                            @if ($service->icon)
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->nama }}"
                                    class="service-icon">
                            @else
                                <div
                                    class="service-icon bg-light rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-code fa-2x text-primary"></i>
                                </div>
                            @endif
                            <h4>{{ $service->nama }}</h4>
                            <p>{{ $service->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="/layanan-jasa" class="btn btn-outline-primary">LEARN DETAIL</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section bg-secondary-yellow">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2>TESTIMONIALS</h2>
                    <p>Apa yang mereka katakan setelah bergabung bersama kami?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($testimonies as $testimoni)
                            <div class="item">
                                <div class="testimonial-card">
                                    <p class="mb-4">"{{ $testimoni->testimoni }}"</p>
                                    <div class="d-flex align-items-center">
                                        @if ($testimoni->foto)
                                            <img src="{{ asset('storage/' . $testimoni->foto) }}"
                                                alt="{{ $testimoni->nama }}" class="rounded-circle me-3" width="60"
                                                height="60">
                                        @else
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                                style="width:60px;height:60px;">
                                                {{ substr($testimoni->nama, 0, 1) }}
                                            </div>
                                        @endif
                                        <div>
                                            <h5 class="mb-0">{{ $testimoni->nama }}</h5>
                                            @if ($testimoni->jabatan && $testimoni->perusahaan)
                                                <small>{{ $testimoni->jabatan }} - {{ $testimoni->perusahaan }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="/testimoni" class="btn btn-dark">LIHAT DETAIL</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Article/News Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2>UPDATE & NEWS</h2>
                    <p>Dapatkan info menarik dan update terbaru kami</p>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-3">
                        <div class="card mb-4">
                            @if ($article->gambar)
                                <img src="{{ asset('storage/' . $article->gambar) }}" class="card-img-top"
                                    alt="{{ $article->judul }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->judul }}</h5>
                                <p class="card-text">
                                    {{ $article->ringkasan ?? Str::limit(strip_tags($article->konten), 100) }}</p>
                                <a href="/artikel/{{ $article->slug }}" class="btn btn-sm btn-outline-primary">BACA
                                    SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mt-4">
                        <a href="/artikel" class="btn btn-primary">BACA ARTIKEL LAINNYA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section (if available) -->
    @if (isset($promo) && $promo)
        <section class="py-5 bg-secondary-yellow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2>{{ $promo->judul }}</h2>
                        <div>{!! $promo->konten !!}</div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="/hubungi-kami" class="btn btn-lg btn-danger">DAPATKAN PENAWARAN</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- About Section (if needed) -->
    @if (isset($about) && $about)
        <section class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>{{ $about->judul }}</h2>
                        <div>{!! $about->konten !!}</div>
                    </div>
                    @if ($about->gambar)
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $about->gambar) }}" alt="About Us" class="img-fluid">
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
@endsection
