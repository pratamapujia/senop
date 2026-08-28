<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon --}}
    {{-- 1. Favicon Standar (Untuk Browser Modern seperti Chrome, Firefox, Edge) --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/senop/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/senop/favicon/favicon-16x16.png') }}">

    {{-- 2. Apple Touch Icon (Untuk Icon di Layar Utama iPhone/iPad) --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/senop/favicon/apple-touch-icon.png') }}">

    {{-- 3. Web Manifest (Untuk Android/Chrome Mobile agar terlihat seperti aplikasi) --}}
    <link rel="manifest" href="{{ asset('assets/senop/favicon/site.webmanifest') }}">

    {{-- 4. Fallback Legacy (Untuk Browser Sangat Tua / IE) --}}
    <link rel="shortcut icon" href="{{ asset('assets/senop/favicon/favicon.ico') }}">

    @yield('title')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.min.css') }}">

    {{-- AOS Animation --}}
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="{{ asset('assets/swiper/swiper-bundle.min.css') }}">

    {{-- Senop css --}}
    <link rel="stylesheet" href="{{ asset('assets/senop/senop.css') }}">
  </head>

  <body class="font-sans antialiased bg-gray-50 text-gray-800 min-h-screen overflow-x-hidden">

    {{-- Header --}}
    @include('layouts.header')

    {{-- Main Section --}}
    <main>
      @yield('main')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- SCROLL TO TOP BUTTON --}}
    <div id="progress-wrap"
      class="fixed right-6 bottom-14 h-12 flex items-center bg-white/90 backdrop-blur-md border border-blue-100 shadow-[0_4px_15px_rgba(0,0,0,0.1)] rounded-full z-9999 opacity-0 invisible transition-all duration-500 transform translate-y-10 group cursor-pointer overflow-hidden">

      {{-- 1. Wrapper Icon & SVG (Fixed Size: w-12 h-12) --}}
      <div class="relative w-12 h-12 flex items-center justify-center shrink-0">

        {{-- SVG Progress Circle --}}
        <svg class="progress-circle svg-content absolute inset-0 w-full h-full rotate--90 p-0.5" viewBox="-1 -1 102 102">
          {{-- Track --}}
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-none stroke-gray-200 stroke-5" />
          {{-- Progress Ring --}}
          <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-none stroke-primary stroke-5 transition-all duration-100 ease-linear drop-shadow-sm" />
        </svg>

        {{-- Icon Panah --}}
        <i class="bi bi-arrow-up text-lg font-bold text-primary relative z-10 transition-transform duration-300 group-hover:-translate-y-0.5"></i>
      </div>

      {{-- 2. Teks Label (Smooth Expand) --}}
      <span
        class="max-w-0 opacity-0 group-hover:max-w-25 group-hover:opacity-100 group-hover:pl-2 group-hover:pr-4 transition-all duration-500 ease-in-out whitespace-nowrap text-sm font-bold text-primary overflow-hidden">
        Ke Atas
      </span>
    </div>

    {{-- AOS Animation --}}
    <script src="{{ asset('assets/aos/aos.js') }}"></script>

    {{-- Swiper JS --}}
    <script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>

    {{-- Senop js --}}
    <script src="{{ asset('assets/senop/senop.js') }}"></script>

    @yield('js')
  </body>

</html>
