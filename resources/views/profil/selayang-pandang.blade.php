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
        <h2 class="text-center mb-4">Selayang Pandang</h2>

        <div class="accordion" id="accordionProfil">
            <br>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne">
                        SELAYANG PANDANG
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionProfil">
                    <div class="accordion-body">
                        <center>
                            <p>Dalam perjalanannya Dinas Kominfo Demak mengalami perkembangan menjadi dinas tipe B
                                berdasarkan Perda Kabupaten Demak Nomor 2 Tahun 2020 Tentang Perubahan Atas Peraturan
                                Daerah Kabupaten Demak Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat
                                Daerah Kabupaten Demak.</p>
                            <p>
                                Berdasarkan Peraturan Bupati No. 58 Tahun 2020 tentang Kedudukan, Susunan Organisasi,
                                Tugas dan Fungsi Serta Tata Kerja Dinas Komunikasi dan Informatika Kabupaten Demak
                                meliputi :
                            </p>
                            <p>
                                <strong>Susunan Organisasi Dinas Komunikasi dan Informatika Kabupaten Demak</strong>
                            </p>
                            <p>
                                1. Kepala Dinas :
                            </p>
                            <p>
                                2. Sekretariat, yang membawahi :
                            </p>
                            <p>
                                a. Subbagian Program dan Keuangan
                            </p>
                            <p>
                                b. Subbagian Umum dan Kepegawaian
                            </p>
                            <p>
                                3. Bidang Informasi dan Komunikasi Publik yang membawahi :
                            </p>
                            <p>
                                a. Seksi Pengelolaan Informasi Daerah (PID)
                            </p>
                            <p>
                                b. Seksi Kehumasan
                            </p>
                            <p>
                                c. Seksi Media Komunikasi Publik
                            </p>
                            <p>
                                4. Bidang Aplikasi Informatika yang membawahi :
                            </p>
                            <p>
                                a. Seksi Sistem dan Program Aplikasi
                            </p>
                            <p>
                                b. Seksi Pengembangan Ekosistem dan Tata Kelola E-Goverment
                            </p>
                            <p>
                                c. Seksi Infrastruktur Jaringan.
                            </p>
                            <p>
                                5. Bidang Statistik dan Persandian, yang membawahkani :
                            </p>
                            <p>
                                a. Seksi Pengelolaan Data Statistik
                            </p>
                            <p>
                                b. Seksi Persandian
                            </p>
                            <p>
                                6. Unit Pelaksana Teknis Daerah
                            </p>
                            <p>
                                7. Kelompok Jabatan Fungsional
                            </p>
                        </center>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        JANJI LAYANAN
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionProfil">
                    <div class="accordion-body">
                        <center>
                            <p>Melayani dengan hati, cepat, tepat, dan berkualitas</p>
                        </center>
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
</body>

</html>
