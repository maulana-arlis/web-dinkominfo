<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dinkominfo Demak</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/image.png') }}" rel="icon">
    <link href="{{ asset('assets/img/image.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .accordion-button:not(.collapsed) {
            background-color: #0d6efd;
            color: #fff;
        }

        .accordion-button {
            font-weight: bold;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-img-top {
            object-fit: cover;
            height: 350px;
        }

        .card-title {
            font-weight: bold;
            color: #002B5B;
        }

        .card-text {
            color: #888;
        }
    </style>
</head>

<body>

    <x-header></x-header>
    <br>

    <main class="main container my-5">
        <div class="container pt-5 pb-5 mt-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                @foreach ($profiles as $profile)
                    <div class="col">
                        <div class="card card-custom h-100 text-center">
                            <img src="{{ asset('storage/' . $profile->image_path) }}" class="card-img-top"
                                alt="{{ $profile->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $profile->name }}</h5>
                                <p class="card-text">{{ $profile->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

    <x-footer :footer="$contact"></x-footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
