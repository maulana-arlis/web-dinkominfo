<section id="kontak" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Hubungi Kami</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>{{ $contact->address }}</p>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>No Hp</h3>
                            <p>TELP {{ $contact->phone_number }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>{{ $contact->email1 }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Buka</h3>
                            <p>{{ $contact->operasional_days }}</p>
                            <p>{{ $contact->operasional_times }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-6">
                <iframe src="{{ $contact->maps_url }}" width="600" height="425" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
