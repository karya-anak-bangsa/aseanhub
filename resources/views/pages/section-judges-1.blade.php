<section id="academics" class="academics section light-background">
    <div class="container">

        <div class="section-title">
            <h2>Our Judges</h2>
        </div>

        <div class="faculty-slider swiper" id="judges-slider">

            <div class="swiper-wrapper">

                @forelse($judges as $judge)
                    <div class="swiper-slide">
                        <div class="instructor-card">

                            <div class="instructor-avatar">
                                <img src="{{ $judge->photo_url ?? asset('img/default-user.png') }}" class="img-fluid">
                            </div>

                            <div class="instructor-info">
                                <h4>{{ $judge->judges_name ?? '-' }}</h4>
                                <span class="instructor-dept">
                                    {{ $judge->origin_country ?? 'Unknown' }} -
                                    {{ $judge->origin_institution ?? 'Unknown' }}
                                </span>
                            </div>

                        </div>
                        {{-- instructor-card --}}
                    </div>
                    {{-- swiper-slide --}}
                @empty
                    <div class="text-center">
                        <p>No judges available</p>
                    </div>
                @endforelse

            </div>
            {{-- swiper-wrapper --}}

            <div class="swiper-pagination"></div>
            {{-- swiper-pagination --}}

        </div>
        {{-- swiper --}}

    </div>
    {{-- section-content --}}

</section>
