<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="mobile-menu">
        <div class="mobile-color">
            <a class="nav-link" href="{{ route('index') }}">STRONA GŁÓWNA</a>
            <a class="nav-link" href="{{ route('korepetycje') }}">KOREPETYCJE</a>
            <a class="nav-link" href="{{ route('kurs-maturalny') }}">KURS MATURALNY</a>
            <a class="nav-link" href="{{ route('matematyka') }}">MATEMATYKA DLA STUDENTÓW</a>
            <a class="nav-link" href="{{ route('opinie') }}">OPINIE</a>
            <a class="nav-link" href="{{ route('cennik') }}">CENNIK</a>
        </div>
    </div>


    <span id="menu" class="mobile-hamburger"><i class="change fas fa-bars"></i></span>
    <div class="social">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <header>
        <div class="bg-color"></div>
        <p class="title">Dobry Wynik<i class="far fa-check-square"></i></p>
        <p class="e1"><i class="fas fa-calculator"></i>Matematyka</p>
        <p class="e2"><i class="fas fa-atom"></i>Fizyka</p>
        <p class="e3"><i class="fas fa-vial"></i>Chemia</p>
        <p class="e4"><i class="fas fa-graduation-cap"></i>Korepetycje</p>
        <p class="e5"><i class="fas fa-city"></i>Poznań</p>

    </header>
    <nav class="navbar justify-content-center">
        <a class="nav-link" href="{{ route('index') }}">STRONA GŁÓWNA</a>
        <a class="nav-link" href="{{ route('korepetycje') }}">KOREPETYCJE</a>
        <a class="nav-link" href="{{ route('kurs-maturalny') }}">KURS MATURALNY</a>
        <a class="nav-link" href="{{ route('matematyka') }}">MATEMATYKA DLA STUDENTÓW</a>
        <a class="nav-link" href="{{ route('opinie') }}">OPINIE</a>
        <a class="nav-link" href="{{ route('cennik') }}">CENNIK</a>
    </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>Designed by Krzysztof Król</footer>

    <div class="card-panel contact-fixed">
        <p id="contact-button"><i class="far fa-check-square"></i>Kontakt</p>
        <p> <i class="fas fa-envelope"></i>kontakt@dobrywynik.pl </p>
        <p> <i class="fas fa-phone"></i>883 751 106</p>
    </div>
    <script>
        const btnContact = document.getElementById('contact-button').addEventListener('click', () => {
            const contactFixed = document.querySelector('.contact-fixed').classList.toggle('move');

        });
        const btnMobile = document.getElementById('menu').addEventListener('click', () => {
            const mobileMenu = document.querySelector('.mobile-menu').classList.toggle('opacity');
            const hamburger = document.querySelector('.change');
            if (hamburger.classList.contains("fa-bars")) {
                hamburger.classList.remove('fa-bars');
                hamburger.classList.add('fa-times');
            } else {
                hamburger.classList.remove('fa-times');
                hamburger.classList.add('fa-bars');
            }





        });
    </script>
    @yield('js')
</body>

</html>