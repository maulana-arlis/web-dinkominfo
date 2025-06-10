<header id="header" class="header d-flex align-items-center fixed-top bg-dark text-white">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo_demak.png') }}" alt="">
            <h2 class="sitename text-white">DINKOMINFO</h2>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}#hero" class="active text-white">Beranda</a></li>
                <li><a href="{{ route('home') }}#tentang-kami" class="text-white">Tentang Kami</a></li>
                <li><a href="{{ route('berita') }}" class="text-white">Berita</a></li>

                <li class="dropdown">
                    <a href="#ppid" class="text-white"><span>PPID</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/ppid/profile-ppid">Profile PPID</a></li>
                        <li><a href="/ppid/informasi-publik">Informasi Publik</a></li>
                        <li><a href="/ppid/form-permohonan">Form Permohonan</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#layanan" class="text-white"><span>Layanan</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/layanan/layanan-aduan">Layanan Aduan</a></li>
                        <li><a href="/layanan/layanan-informasi">Layanan Informasi</a></li>
                        <li><a href="/layanan/layanan-maklumat">Layanan Maklumat</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#profile" class="text-white"><span>Profile</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/profile/selayang-pandang">Selayang Pandang</a></li>
                        <li><a href="/profile/visi-misi">Visi dan Misi</a></li>
                        <li><a href="/profile/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a href="/profile/profile-pejabat">Profile Pejabat</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
    </div>
</header>
