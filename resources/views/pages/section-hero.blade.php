{{-- Sumber : index.html - hero section  --}}

<section id="hero" class="hero section light-background">
    <div class="container" data-aos="zoom-in">
        <div class="hero-block">
            <div class="row align-items-center g-4 g-xl-5">
                <div class="col-lg-7">
                    <div class="hero-copy">
                        <h1>ASEAN Hub International Design Competition</h1>
                        <p>
                            Welcome to the ASEAN Hub International Design Competition, a collaborative platform that brings together creativity, innovation, and regional identity.
                            Jakarta, as a dynamic metropolitan city and gateway to Southeast Asia, is committed to fostering sustainable urban development that reflects cultural diversity and forward-thinking design.
                            Through this competition, we invite young architects, designers, and visionaries across ASEAN to contribute ideas that will shape the future of urban living integrating functionality, environmental responsibility, and community engagement.
                            We believe that great cities are built not only with infrastructure, but with ideas, collaboration, and shared vision. Let us work together to build a more inclusive, resilient, and inspiring ASEAN.
                        </p>
                        <div class="hero-btns">
                            <a href="#" class="btn-tour"><i class="text-danger fas fa-thumbs-up"></i>Join Competition</a>
                            <a href="{{ route('login') }}" class="btn-tour"><i class="text-danger fas fa-right-to-bracket"></i>Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-visual">
                        <img src="{{ asset('img/hero.webp') }}" class="img-fluid campus-photo" alt="">
                    </div>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </div>
        {{-- hero-block --}}
    </div>
    {{-- container --}}
</section>
{{-- section --}}
