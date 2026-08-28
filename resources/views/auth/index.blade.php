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

    <title>Login Admin | SMK Senopati</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.min.css') }}">

    {{-- Senop css --}}
    <link rel="stylesheet" href="{{ asset('assets/senop/admin-senop.css') }}">
  </head>

  <body class="bg-background font-sans text-header">

    <a href="{{ route('landing-page') }}"
      class="fixed top-6 right-6 z-50 flex items-center gap-2 px-5 py-2.5 bg-white/80 backdrop-blur-sm text-header font-semibold rounded-full shadow-lg border border-secondary hover:bg-white hover:text-primary transition-all duration-300 hover:shadow-xl">
      <i class="bi bi-house-door"></i>
      <span>Beranda</span>
    </a>

    <div class="min-h-screen flex items-center justify-center p-6">
      <div class="w-full max-w-md bg-white p-8 rounded-3xl shadow-xl border border-secondary">

        <div class="text-center mb-8">
          <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-primary/20">
            <i class="bi bi-shield-lock text-white text-2xl"></i>
          </div>
          <h2 class="text-2xl font-extrabold text-header">Selamat Datang</h2>
          <p class="text-gray-500 mt-2">Silakan masuk ke Dashboard Admin</p>
        </div>

        @if (Session::get('error'))
          <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-xl flex items-start gap-3 mb-6">
            <i class="bi bi-exclamation-triangle-fill text-lg"></i>
            <div>
              <p class="text-sm font-bold">Login Gagal</p>
              <p class="text-xs">{{ Session::get('error') }}</p>
            </div>
          </div>
        @endif

        <form action="{{ route('loginAdmin') }}" method="POST" class="space-y-5">
          @csrf
          <div>
            <label class="block text-sm font-semibold mb-2">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Admin"
              class="w-full px-4 py-3 rounded-xl border border-secondary focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
          </div>

          <div>
            <label class="block text-sm font-semibold mb-2">Password</label>
            <input type="password" name="password" placeholder="••••••••"
              class="w-full px-4 py-3 rounded-xl border border-secondary focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition">
          </div>

          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="accent-primary">
              <span>Ingat saya</span>
            </label>
            <a href="#" class="text-primary font-semibold hover:underline">Lupa password?</a>
          </div>

          <button type="submit" class="w-full py-3.5 bg-primary text-white rounded-xl font-bold hover:bg-accent transition-all shadow-lg shadow-primary/20 transform hover:-translate-y-0.5">
            Masuk Sekarang
          </button>
        </form>

        <p class="text-center text-xs text-gray-400 mt-8">
          &copy; 2026 SMK Senopati Sedati
        </p>
      </div>
    </div>

  </body>

</html>
