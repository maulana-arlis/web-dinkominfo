<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - DPMPTSP Demak</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/image.png') }}" rel="icon">
    <link href="{{ asset('assets/img/image.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        .news-link {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease-in-out, border-bottom 0.3s ease-in-out;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }

        .news-link:hover {
            color: #4154f1;
            border-bottom: 2px solid #4154f1;
        }

        .btn-news {
            color: #fff;
            background: #4154f1;
            font-size: 15px;
            padding: 8px 25px;
            margin: 0 0 0 30px;
            border-radius: 4px;
            transition: 0.3s;
            font-weight: 500;
        }

        .btn-news:hover {
            color: #fff;
            background: color-mix(in srgb, #4154f1, transparent 15%);
        }
    </style>
</head>

<body class="index-page">

    <!-- ======= Header Section ======= -->
    <x-header></x-header>

    <main class="main">
        <div style="height: 100px;"></div>
        <div class="page-title" data-aos="fade-up">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Berita Terkini</h1>

                        </div>
                    </div>
                </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Berita</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <section id="berita" class="services section">
            <div class="container" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Mengubah menjadi 5 kolom per row -->
                    @foreach ($news as $item)
                        <div class="col">
                            <div class="card shadow-sm border-0 h-100">
                                <img src="{{ asset('storage/' . $item->image_path) }}" class="card-img-top"
                                    alt="{{ $item->title }}" style="height: 180px; object-fit: cover;">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <a href="{{ route('berita.show', $item->slug) }}" class="news-link">
                                            {{ Str::limit($item->title, 50) }}
                                        </a>
                                    </h6>
                                    <p class="card-text text-muted small">Diposting oleh
                                        {{ $item->user->name ?? 'Anonim' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $news->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </section><!-- /Services Section -->
    </main>

    <!-- Footer Section -->
    <x-footer :footer="$contact" :services="$services"></x-footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
