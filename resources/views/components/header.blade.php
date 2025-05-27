<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/logo_demak.png" alt="">
            <h2 class="sitename">DINKOMINFO</h2>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}#hero" class="active">Beranda</a></li>
                <li><a href="{{ route('home') }}#tentang-kami">Tentang Kami</a></li>
                <li><a href="{{ route('berita') }}">Berita</a></li>

                <li class="dropdown">
                    <a href="#ppid"><span>PPID</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/ppid/profil">Profil PPID</a></li>
                        <li><a href="/ppid/informasi-publik">Informasi Publik</a></li>
                        <li><a href="/ppid/form-permohonan">Form Permohonan</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#layanan"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/layanan/aduan">Layanan Aduan</a></li>
                        <li><a href="/layanan/informasi">Informasi Layanan</a></li>
                        <li><a href="/layanan/surat">Layanan Surat</a></li>
                    </ul>
                </li>

                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>

    </div>
</header>
