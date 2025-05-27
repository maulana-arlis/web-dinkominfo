<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan</h2>
        <p>Pertanyaan yang sering ditanyakan</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            @foreach ($faqs->chunk(ceil(count($faqs) / 2)) as $index => $faqChunk)
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                    <div class="faq-container">
                        @foreach ($faqChunk as $faq)
                            <div class="faq-item">
                                <h3>{{ $faq['question'] }}</h3>
                                <div class="faq-content">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
                        @endforeach
                    </div>
                </div><!-- End Faq Column-->
            @endforeach
        </div>
    </div>


</section><!-- /Faq Section -->
