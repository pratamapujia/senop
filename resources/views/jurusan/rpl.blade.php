@extends('layouts.main')

@section('title')
  <title>Jurusan RPL - SMK Senopati</title>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN CODING --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-indigo-900 via-slate-900 to-purple-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (RPL) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
      {{-- Ikon Kurung Kurawal --}}
      <div class="absolute top-1/4 left-10 animate-pulse transition-all duration-4000">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
        </svg>
      </div>
      {{-- Ikon Database --}}
      <div class="absolute bottom-1/4 right-20 animate-bounce duration-5000">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
        </svg>
      </div>
      {{-- Ikon Terminal/Laptop --}}
      <div class="absolute top-1/2 right-1/4 opacity-40">
        <span class="text-6xl font-mono text-white opacity-20"> { } </span>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-blue-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-purple-300 uppercase tracking-wider">RPL</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Rekayasa Perangkat Lunak
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Menguasai seni pengkodean untuk menciptakan solusi digital cerdas dan aplikasi masa depan.
      </p>
    </div>
  </section>

  {{-- ISI DETAIL JURUSAN --}}
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        {{-- SISI KIRI: DESKRIPSI & MATERI --}}
        <div class="lg:col-span-2 space-y-12" data-aos="fade-right">
          <div>
            <h2 class="text-3xl font-black text-slate-900 mb-6">Ubah Ide Menjadi Teknologi.</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              RPL membekali siswa dengan kemampuan untuk merancang, membuat, mengembangkan, dan mengelola perangkat lunak. Siswa belajar melalui berbagai projek sehingga tidak hanya memahami teori
              pemrograman, tetapi juga terbiasa menciptakan solusi digital.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Materi 1 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-purple-300 transition-all">
              <div class="w-12 h-12 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 mb-5">
                <i class="fa-solid fa-code"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Web & Mobile Dev</h4>
              <p class="text-sm text-gray-500">Mempelajari HTML, CSS, JavaScript, PHP, hingga pengembangan aplikasi Android dan iOS.</p>
            </div>
            {{-- Materi 2 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-indigo-300 transition-all">
              <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600 mb-5">
                <i class="fa-solid fa-database"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Database Management</h4>
              <p class="text-sm text-gray-500">Penguasaan SQL (MySQL, PostgreSQL) dan pemahaman struktur data untuk aplikasi skala besar.</p>
            </div>
            {{-- Materi 3 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-green-300 transition-all">
              <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 mb-5">
                <i class="fa-solid fa-paintbrush"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">UI/UX</h4>
              <p class="text-sm text-gray-500">Menguasai desain antarmuka (UI) dan pengalaman pengguna (UX) untuk membuat aplikasi yang memukau dan intuitif.</p>
            </div>
            {{-- Materi 4 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-rose-300 transition-all">
              <div class="w-12 h-12 bg-rose-100 rounded-2xl flex items-center justify-center text-rose-600 mb-5">
                <i class="fa-solid fa-robot"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Dasar Teknologi AI</h4>
              <p class="text-sm text-gray-500">Memahami dasar-dasar teknologi AI dan pemahaman dasar pemrograman untuk pengembangan aplikasi AI.</p>
            </div>
          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        <div class="space-y-8" data-aos="fade-left">
          {{-- Prospek Card --}}
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl relative overflow-hidden">
            <h3 class="text-xl font-black mb-6 relative z-10">Prospek Karier</h3>
            <ul class="space-y-4 relative z-10">
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> Web Fullstack Developer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> Mobile App Developer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> Software Quality Assurance
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> UI/UX Designer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> Frontend & Backend Developer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> Software Tester
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div> IT Support
              </li>
            </ul>
          </div>

          {{-- Foto Praktek Coding 3:4 --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg border-4 border-white">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=600" alt="Siswa RPL Coding" class="w-full h-full object-cover">
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
