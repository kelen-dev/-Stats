<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="KelenS">

        <meta property="og:title" content="@yield('title')">
        <meta property="og:type" content="@yield('type', 'website')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:site_name" content="&Stats">
        @stack('meta')

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | &Stats</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

        {{-- Fonts --}}
        <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        {{-- Page level scripts --}}
        @stack('scripts')

        {{-- Scripts --}}
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/axios/axios.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/css-vars-ponyfill.min.js') }}" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-confirm="delete"]').on('click', function (e) {
                    e.preventDefault();
                    $('#confirmDeleteForm').attr('action', $(this).attr('href'));
                    $('#confirmDeleteModal').modal('show');
                });
                cssVars({});
            });
        </script>
        <script src="{{ asset('assets/js/script.js') }}" defer></script>
        <script src="{{ asset('assets/js/glide.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
        <script src="{{ asset('assets/js/theme_button.js') }}" defer></script>
        <script src="{{ asset('assets/js/button.js') }}" defer></script>
        <script src="{{ asset('assets/js/navbar.js') }}" defer></script>
        <script src="{{ asset('assets/js/player.js') }}" defer></script>

        {{-- Bootstrap --}}
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap-grid.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap-reboot.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap-utilities.css') }}" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ asset('assets/css/scrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/player.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/widgets.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
        @stack('styles')
    </head>

    <body>

        {{-- Back to top button --}}
        <a id="button">
            <i class="fas fa-angle-up"></i>
        </a>

        {{-- Music player --}}
        <div class="player">
            <div class="player-track">
                <div class="artist-name"></div>
                <div class="music-name"></div>
                <div class="progress-bar">
                    <div class="fillBar"></div>
                </div>
                <div class="time"></div>
            </div>
            <div class="circle">
                <div class="circ"></div>
                <div id="thumbnail" class="thumbnail"></div>
            </div>
            <div class="player-control">
                <i id="prev" class="prev-btn fas fa-backward"></i>
                <i id="play" class="play-btn fas fa-play"></i>
                <i id="next" class="next-btn fas fa-forward"></i>
            </div>
        </div>

        @include('flashy::message')

        {{-- Page --}}
        <div id="app">

            <header class="header">
                @include('elements.navbar')
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="footer">
                @include('elements.footer')
            </footer>
        </div>

        @stack('footer-scripts')

    </body>

</html>
