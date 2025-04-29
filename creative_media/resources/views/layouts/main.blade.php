<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Creative Media Surabaya' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        /* Custom CSS */
        .bg-primary-green {
            background-color: #4CAF50;
        }
        .bg-secondary-yellow {
            background-color: #F1C40F;
        }
        .bg-dark-footer {
            background-color: #222;
            color: #fff;
        }
        .testimonial-section {
            padding: 60px 0;
        }
        .testimonial-card {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .contact-form {
            background-color: #4CAF50;
            padding: 50px 0;
            color: white;
        }
        .service-card {
            text-align: center;
            margin-bottom: 30px;
        }
        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" alt="Creative Media" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profil">Profil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="bidangStudiDropdown" role="button" data-bs-toggle="dropdown">
                                Bidang Studi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/bidang-studi/web-development">Web Development</a></li>
                                <li><a class="dropdown-item" href="/bidang-studi/mobile-development">Mobile Development</a></li>
                                <li><a class="dropdown-item" href="/bidang-studi/desain-grafis">Desain Grafis</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown">
                                Layanan Jasa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/layanan/branding-design">Branding & Design</a></li>
                                <li><a class="dropdown-item" href="/layanan/web-development">Web Development</a></li>
                                <li><a class="dropdown-item" href="/layanan/mobile-apps">Mobile Apps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/karya-siswa">Karya Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>OUR LOCATION</h5>
                    <p>Surabaya Barat<br>
                    Kawasan Darmo Satelit Town<br>
                    Jl. Sukasari Kiri 1, no - 15<br>
                    Kode Pos 60187, Surabaya<br>
                    Indonesia</p>
                </div>
                <div class="col-md-4">
                    <h5>MAIL US</h5>
                    <p>Customer Care<br>
                    <a href="mailto:cs@creativemedia.id" class="text-light">cs@creativemedia.id</a></p>
                    <p>Human Resource Development<br>
                    <a href="mailto:hrd@creativemedia.id" class="text-light">hrd@creativemedia.id</a></p>
                </div>
                <div class="col-md-4">
                    <h5>CONTACT US</h5>
                    <p>Surabaya Barat<br>
                    031 7328 540<br>
                    0821 3131 4040</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; {{ date('Y') }} Creative Media Corp. All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            // Owl Carousel for testimonials
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                responsive:{
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>
</html>
