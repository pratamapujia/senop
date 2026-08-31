@extends('layouts.main')

@section('title')
  <title>Jurusan Manajemen Perkantoran - SMK Senopati</title>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN ADMINISTRASI --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-slate-800 via-slate-900 to-emerald-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (MP) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
      {{-- Ikon Dokumen --}}
      <div class="absolute top-1/4 left-12 animate-bounce duration-4000">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
      </div>
      {{-- Ikon Kalender --}}
      <div class="absolute bottom-1/4 right-24 animate-pulse duration-3000">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
      {{-- Ikon Grafik --}}
      <div class="absolute top-1/2 right-1/3 opacity-30">
        <svg class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1"
            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
        </svg>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-emerald-500 rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-blue-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-emerald-300 uppercase tracking-wider">MP</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Manajemen Perkantoran
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Membentuk tenaga administrator profesional dengan keahlian tata kelola bisnis dan komunikasi perkantoran modern.
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
            <h2 class="text-3xl font-black text-slate-900 mb-6">Profesional Mengelola Administrasi, Komunikasi, dan Informasi.</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              Manajemen Perkantoran mempersiapkan siswa menjadi tenaga profesional yang mampu mengelola administrasi, dokumen, informasi, komunikasi, dan berbagai aktivitas perkantoran. Pembelajaran
              menggabungkan keterampilan administrasi dengan pemanfaatan teknologi digital.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Materi 1 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-emerald-300 transition-all">
              <div class="w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center text-emerald-600 mb-5">
                <i class="fa-solid fa-edit"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Administrasi Digital</h4>
              <p class="text-sm text-gray-500">Otomatisasi perkantoran, pengelolaan dokumen digital, dan korespondensi bisnis profesional.</p>
            </div>
            {{-- Materi 2 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-emerald-300 transition-all">
              <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-5">
                <i class="fa-solid fa-handshake"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Public Relations</h4>
              <p class="text-sm text-gray-500">Teknik komunikasi efektif, layanan prima (service excellence), dan protokol kesehatan kerja.</p>
            </div>
            {{-- Materi 3 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-rose-300 transition-all">
              <div class="w-12 h-12 bg-rose-100 rounded-2xl flex items-center justify-center text-rose-600 mb-5">
                <i class="fa-solid fa-chart-line"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Administrasi Keuangan</h4>
              <p class="text-sm text-gray-500">Pengelolaan keuangan, akuntansi, dan perbankan profesional.</p>
            </div>
            {{-- Materi 4 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-yellow-300 transition-all">
              <div class="w-12 h-12 bg-yellow-100 rounded-2xl flex items-center justify-center text-yellow-600 mb-5">
                <i class="fa-solid fa-fax"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Administrasi Perkantoran</h4>
              <p class="text-sm text-gray-500">Pengelolaan administrasi perkantoran, dokumen, dan informasi profesional.</p>
            </div>
          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        <div class="space-y-8" data-aos="fade-left">
          {{-- Prospek Card --}}
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl">
            <h3 class="text-xl font-black mb-6">Prospek Karier</h3>
            <ul class="space-y-4">
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Staff Administrasi
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Secretary
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Office Manager
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Staff Operasional
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Staff Tata Usaha
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div> Digital Administration Staff
              </li>
            </ul>
          </div>

          {{-- Foto Praktek Perkantoran 3:4 --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg border-4 border-white">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Praktek Administrasi" class="w-full h-full object-cover">
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
