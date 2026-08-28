@extends('layouts.main')

@section('title')
  <title>Fasilitas</title>
@endsection

@section('main')
  {{-- HERO SECTION --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">

    {{-- 1. BACKGROUND GRADIENT --}}
    <div class="absolute inset-0 bg-linear-to-br from-blue-900 via-slate-900 to-indigo-900"></div>

    {{-- 2. ANIMATED BLOBS --}}
    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    {{-- 3. GRID PATTERN --}}
    <div class="absolute inset-0 opacity-[0.15]" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;">
    </div>

    {{-- Gradient Fade Bottom --}}
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    {{-- 4. KONTEN UTAMA --}}
    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">

      {{-- Breadcrumb --}}
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Beranda</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Fasilitas</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Fasilitas SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Fasilitas pendukung siswa belajar di SMK Senopati
      </p>

    </div>
  </section>

  {{-- FACILITIES SECTION --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">

      {{-- Judul Seksi (Opsional) --}}
      <div class="text-center mb-16" data-aos="fade-up">
        <span class="px-4 py-1.5 rounded-full bg-blue-100 text-blue-600 text-xs font-bold uppercase tracking-widest">Sarana & Prasarana</span>
        <h2 class="text-4xl font-black text-slate-900 mt-4">Fasilitas Unggulan</h2>
      </div>

      {{-- Grid Fasilitas --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="100">
          <div class="relative h-64 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=800" alt="Lab Komputer"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
              <span class="text-[10px] font-bold text-blue-600 uppercase">IT Center</span>
            </div>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-black text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Lab. Komputer & Jaringan</h3>
            <p class="text-gray-500 text-sm leading-relaxed mb-6">Dilengkapi dengan 40 unit PC high-end, server internal, dan koneksi internet serat optik 100Mbps untuk praktek siswa.</p>

            <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-50">
              <div class="flex items-center gap-2 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                </svg>
                <span class="text-xs font-bold">WiFi 6</span>
              </div>
              <div class="flex items-center gap-2 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>
                <span class="text-xs font-bold">Full AC</span>
              </div>
            </div>
          </div>
        </div>

        <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
          <div class="relative h-64 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=800" alt="Perpustakaan"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
              <span class="text-[10px] font-bold text-indigo-600 uppercase">Literasi</span>
            </div>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-black text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">Perpustakaan Digital</h3>
            <p class="text-gray-500 text-sm leading-relaxed mb-6">Ribuan koleksi buku fisik dan e-book yang dapat diakses kapan saja melalui aplikasi perpustakaan mandiri sekolah.</p>

            <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-50">
              <div class="flex items-center gap-2 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span class="text-xs font-bold">5.000+ Buku</span>
              </div>
            </div>
          </div>
        </div>

        <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100" data-aos="fade-up" data-aos-delay="300">
          <div class="relative h-64 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=800" alt="Bengkel"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
              <span class="text-[10px] font-bold text-orange-600 uppercase">Workshop</span>
            </div>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-black text-slate-900 mb-3 group-hover:text-orange-600 transition-colors">Bengkel Otomotif Modern</h3>
            <p class="text-gray-500 text-sm leading-relaxed mb-6">Area praktek luas dengan standar industri, dilengkapi peralatan scan tools canggih dan alat peraga mesin terbaru.</p>

            <div class="flex flex-wrap gap-4 pt-6 border-t border-gray-50">
              <div class="flex items-center gap-2 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                </svg>
                <span class="text-xs font-bold">Standard Industri</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection
