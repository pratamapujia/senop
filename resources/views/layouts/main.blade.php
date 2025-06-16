<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('assets/senop/img/logo/icon.ico') }}" type="image/x-icon">

    @yield('title')

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/static/bootstrap/css/bootstrap.min.css') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="{{ asset('assets/static/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- AOS Animation --}}
    <link rel="stylesheet" href="{{ asset('assets/static/aos/aos.css') }}">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="{{ asset('assets/static/swiper/swiper-bundle.min.css') }}">

    {{-- Senop Style --}}
    <link rel="stylesheet" href="{{ asset('assets/senop/style.css') }}">
  </head>

  <body class="index-page">

    @include('layouts.header')

    @yield('main')

    @include('layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    {{-- Preloader --}}
    <div id="preloader"></div>

    {{-- Bootstrap --}}
    <script src="{{ asset('assets/static/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- AOS Animation --}}
    <script src="{{ asset('assets/static/aos/aos.js') }}"></script>

    {{-- Swiper JS --}}
    <script src="{{ asset('assets/static/swiper/swiper-bundle.min.js') }}"></script>

    {{-- Senop Script --}}
    <script src="{{ asset('assets/senop/script.js') }}"></script>
  </body>

</html>
