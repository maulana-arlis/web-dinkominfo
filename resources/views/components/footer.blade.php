<footer id="footer" class="footer bg-dark text-white">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="/" class="d-flex align-items-center">
                    <span class="sitename text-white">DINKOMINFO</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>{{ $footer->address }}</p>
                    <p class="mt-3"><strong>Telp:</strong> <span>{{ $footer->phone_number }}</span></p>
                    <p><strong>Email:</strong> <span>{{ $footer->email1 }}</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4 class="text-white">Link Cepat</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="/#hero" class="text-white">Beranda</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="/#tentang-kami" class="text-white">Tentang Kami</a>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <a href="/#berita" class="text-white">Berita</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="/#kontak" class="text-white">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4 class="text-white">Ikuti Kami</h4>
                <p>Ikuti media sosial kami untuk informasi lebih lanjut</p>
                <div class="social-links d-flex">
                    <a href="{{ $footer->twitter_url }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="{{ $footer->facebook_url }}" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $footer->instagram_url }}" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>


    </div>
    <div class="container copyright text-center mt-4  footer-newsletter">
        <p>©<span>Copyright {{ date('Y') }}
            </span> <strong class="px-1 sitename">DINKOMINFO</strong> <span>Kabupaten Demak</span></p>
    </div>
</footer>
