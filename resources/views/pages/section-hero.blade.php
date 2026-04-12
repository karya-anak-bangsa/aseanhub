{{-- Sumber : index.html - hero section  --}}

<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="hero-block">
            <div class="row align-items-center g-4 g-xl-5">
                <div class="col-lg-7">
                    <div class="hero-copy">
                        <h1>ASEAN Hub International Design Competition</h1>
                        <p>Join a premier international platform that connects emerging talents and professionals across ASEAN to showcase innovative urban design solutions. Participants will compete for a total prize pool exceeding USD 20,000 while gaining international exposure. The competition brings together experts, judges, and creative minds from diverse backgrounds. Together, we aim to drive impactful and sustainable urban development across the region.</p>
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
