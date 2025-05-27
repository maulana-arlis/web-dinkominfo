<section id="profil" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Profil</h2>
        <p>Profil Tim Kami</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            @foreach ($profiles as $profile)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ 100 * $profile['order'] }}">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('storage/' . $profile['image_path'])}}" class="img-fluid" alt="{{ $profile['name'] }}">
                    </div>
                    <div class="member-info">
                        <h4>{{ $profile['name'] }}</h4>
                        <span>{{ $profile['position'] }}</span>
                    </div>
                </div>
            </div><!-- End Profile Item -->
        @endforeach

        </div>

    </div>

</section><!-- /Team Section -->
