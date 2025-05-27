        <!-- Services Section -->
        <section id="pelayanan" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Perizinan</h2>
                <p>Jenis Layanan Perizinan<br></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @php
                        $colors = ['item-cyan', 'item-orange', 'item-red', 'item-teal', 'item-indigo'];
                    @endphp

                    @foreach ($services as $index => $service)
                        @php
                            $randomColor = $colors[$index % count($colors)];
                        @endphp
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                            <div class="service-item {{ $randomColor }} position-relative">
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $service['icon_url']) }}" alt="{{ $service['name'] }}">
                                </div>
                                <h3>{{ $service['name'] }}</h3>
                                <p>{{ $service['description'] }}</p>
                                <a href="{{ $service['url'] }}" target="_blank" class="read-more stretched-link">
                                    <span>Kunjungi</span> <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach

                </div>
            </div>
        </section><!-- /Services Section -->
