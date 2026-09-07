@extends('layouts.main')

@section('title')
  <title>Jurusan TKJ - SMK Senopati</title>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN JURUSAN --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-blue-900 via-slate-900 to-indigo-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (TKJ) --}}
    {{-- Kamu bisa mengganti ikon-ikon ini jika jurusannya berbeda (misal: RPL ganti dengan ikon </> atau {} ) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
      <div class="absolute top-1/4 left-10 animate-bounce transition-all duration-3000">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
      </div>
      <div class="absolute bottom-1/4 right-20 animate-pulse">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
        </svg>
      </div>
      <div class="absolute top-1/2 right-1/3 animate-spin duration-10000">
        <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1"
            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
        </svg>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">TKJ</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Teknik Komputer & Jaringan
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Membangun infrastruktur masa depan melalui penguasaan jaringan dan sistem komputer modern.
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
            <h2 class="text-3xl font-black text-slate-900 mb-6">Bangun Infrastruktur Digital, Kuasai Teknologi Masa Depan.</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              TKJ membekali siswa dengan kemampuan dalam komputer, jaringan, server, dan teknologi infrastruktur digital. Siswa belajar bagaimana membangun, mengelola, mengamankan, dan memecahkan
              masalah pada sistem komputer dan jaringan.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:border-blue-300 transition-all">
              <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-4">
                <i class="fa-solid fa-laptop"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Dasar Komputer</h4>
              <p class="text-xs text-gray-500">Menguasai dasar-dasar komputer seperti pengkodean, pemrograman, dan perangkat lunak.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:border-cyan-300 transition-all">
              <div class="w-10 h-10 bg-cyan-100 rounded-xl flex items-center justify-center text-cyan-600 mb-4">
                <i class="fa-solid fa-network-wired"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Jaringan & Server</h4>
              <p class="text-xs text-gray-500">Routing, Switching, Mikrotik, Cisco, dan administrasi Server.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:border-rose-300 transition-all">
              <div class="w-10 h-10 bg-rose-100 rounded-xl flex items-center justify-center text-rose-600 mb-4">
                <i class="fa-solid fa-person-dots-from-line"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Keamanan Jaaringan</h4>
              <p class="text-xs text-gray-500">Menguasai keamanan jaringan, penyelesaian masalah keamanan, dan implementasi keamanan jaringan.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:border-yellow-300 transition-all">
              <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center text-yellow-600 mb-4">
                <i class="fa-solid fa-comment-nodes"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Administrasi Jaringan</h4>
              <p class="text-xs text-gray-500">Menguasai administrasi jaringan, penyelesaian masalah jaringan, dan implementasi administrasi jaringan.</p>
            </div>
          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        <div class="space-y-8" data-aos="fade-left">
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl">
            <h3 class="text-xl font-black mb-6">Prospek Karir</h3>
            <ul class="space-y-4">
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span> Teknisi Komputer & Jaringan
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span> System Administrator
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span> IT Technical Support
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span> Junior Cyber Security Support
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <span class="w-2 h-2 bg-cyan-400 rounded-full"></span> Wirausaha jasa komputer dan jaringan
              </li>
            </ul>
          </div>

          {{-- Foto Praktek dengan rasio 3:4 --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600" alt="Praktek TKJ" class="w-full h-full object-cover">
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
