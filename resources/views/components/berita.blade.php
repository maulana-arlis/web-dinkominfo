        <!-- Berita Section -->
        <section id="berita" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita</h2>
                <p>Berita terkini<br></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Mengubah menjadi 5 kolom per row -->
                    <! @foreach ($news as $item)
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
                    <a href="{{ route('berita') }}" class="btn-news">Lihat lebih banyak</a>
                </div>
            </div>
        </section><!-- /Services Section -->
        <!-- Custom CSS -->
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
                border-radius: 4px;
                transition: 0.3s;
                font-weight: 500;
            }

            .btn-news:hover {
                color: #fff;
                background: color-mix(in srgb, #4154f1, transparent 15%);
            }
        </style>
