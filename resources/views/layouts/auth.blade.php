<!DOCTYPE html>
<html lang="en">

    <head>
        {{-- set metadata on this website --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ASEAN HUB International Design Competition 2026</title>

        {{-- set icon --}}
        <link rel="icon" href="{{ asset('img/dki-jakarta.webp') }}" type="image/png">

        {{-- Bootstrap 5.3.8 --}}
        <link rel="stylesheet" href="{{ asset('template-auth/bootstrap-5.3.8/dist/css/bootstrap.min.css') }}">

        {{-- Fontawesome 6.7.2 --}}
        <link rel="stylesheet" href="{{ asset('template-plugins/fontawesome-6.7.2/css/all.min.css') }}">

        {{-- custom css for layouts auth --}}
        <style>
            :root {
                --warning-500: #ffb703;
                --warning-600: #f0a500;
                --warning-default: #fec107;
            }

            body {
                min-height: 100vh;
            }

            /* LEFT SIDE */
            #auth-left {
                min-height: 100vh;
            }

            #auth-left {
                background-image:
                    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('{{ asset('/img/hero.webp') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: white;
            }

            #auth-left h1 {
                font-weight: 700;
                color: #fefefe;
            }

            #auth-left p {
                font-weight: 400;
                color: #fefefe;
            }

            /* RIGHT SIDE */
            #auth-right {
                min-height: 100vh;
            }

            #auth-card {
                width: 95%;
                height: auto;
                border-radius: .5rem;
                box-shadow: 0 5px 50px rgba(0, 0, 0, .08);
            }

            .form-label {
                font-weight: bold;
            }

            .form-control {
                border-radius: .5rem;
                padding: 0.55rem 0.55rem;
            }

            .form-control:focus {
                border-color: var(--warning-default);
                box-shadow: none;
            }

            .btn-login {
                font-weight: bold;
                border-radius: .5rem;
                padding: 0.55rem 0.55rem;
            }
        </style>

        @stack('styles')
    </head>

    <body>

        <main class="container-fluid">
            <div class="row min-vh-100">
                <div class="col-sm-8 d-flex flex-column align-items-center justify-content-center p-0" id="auth-left">
                    <div class="text-center">
                        <h1 class="mb-3">ASEAN Hub International Design Competition</h1>
                        <p class="lead mb-3">Manage your data securely, quickly, and efficiently.</p>
                    </div>
                </div>
                <div class="col-sm-4 d-flex flex-column align-items-center justify-content-center p-0" id="auth-right">
                    @yield('content')
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </main>
        {{-- main container --}}

        {{-- Bootstrap 5.3.8 --}}
        <script src="{{ asset('template-auth/bootstrap-5.3.8/dist/js/bootstrap.bundle.min.js') }}"></script>

        {{-- Fontawesome 6.7.2 --}}
        <script src="{{ asset('template-plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

        @stack('scripts')
    </body>

</html>
