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
    </style>
</head>

<body>

    <x-header></x-header>

    <main class="main container my-5">
        <h2 class="text-center mb-4">Profil PPID</h2>

        <div class="accordion" id="accordionPPID">
            <br>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne">
                        TENTANG PPID
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionPPID">
                    <div class="accordion-body">
                        <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) bertanggung jawab dalam pengelolaan
                            informasi publik di lingkungan Dinas Komunikasi dan Informatika Kabupaten Demak.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        SK PPID PEMBANTU
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPPID">
                    <div class="accordion-body">
                        <p>SK PPID Pembantu merupakan Surat Keputusan yang menetapkan struktur dan tugas dari PPID
                            Pembantu di lingkungan Dinkominfo.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree">
                        TUGAS PPID PEMBANTU
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionPPID">
                    <div class="accordion-body">
                        <ul>
                            <li>Mengumpulkan informasi dari unit kerja masing-masing</li>
                            <li>Mengelola dan mengklasifikasi informasi</li>
                            <li>Menyediakan informasi publik yang dapat diakses oleh masyarakat</li>
                        </ul>
                    </div>
                </div>
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
