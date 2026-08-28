@extends('layouts.main')

@section('title')
  <title>Struktur Organisasi</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Struktur Organisasi</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Struktur Organisasi
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Jajaran guru dan karyawan SMK Senopati
      </p>

    </div>
  </section>

  {{-- ORGANIZATIONAL STRUCTURE SECTION --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">

      <div class="max-w-6xl mx-auto">

        {{-- LEVEL 1: KEPALA SEKOLAH --}}
        <div class="flex justify-center mb-16" data-aos="fade-up">
          <div class="group relative">
            {{-- Glowing Effect --}}
            <div class="absolute -inset-1 bg-linear-to-r from-blue-600 to-indigo-500 rounded-4xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>

            <div class="relative bg-white p-6 rounded-4xl shadow-sm border border-gray-100 text-center w-72 md:w-80">
              {{-- Foto Rasio 3:4 --}}
              <div class="aspect-3/4 mb-6 rounded-2xl overflow-hidden shadow-inner bg-slate-100">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" alt="Kepala Sekolah"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
              <h3 class="text-xl font-black text-header">Drs. Budi Santoso</h3>
              <p class="text-primary font-bold text-sm uppercase tracking-wider mt-1">Kepala Sekolah</p>
            </div>
          </div>
        </div>

        {{-- LEVEL 2: WAKIL KEPALA SEKOLAH --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20" data-aos="fade-up" data-aos-delay="200">
          <div class="group bg-white p-5 rounded-4xl shadow-sm border border-gray-100 text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
            <div class="aspect-3/4 mb-5 rounded-xl overflow-hidden bg-slate-100">
              <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=400" alt="Wakasek"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <h4 class="text-lg font-bold text-header">Siti Aminah, M.Pd</h4>
            <p class="text-primary text-xs font-bold uppercase tracking-tight">Waka. Kurikulum</p>
          </div>

          <div class="group bg-white p-5 rounded-4xl shadow-sm border border-gray-100 text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
            <div class="aspect-3/4 mb-5 rounded-xl overflow-hidden bg-slate-100">
              <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400" alt="Wakasek"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <h4 class="text-lg font-bold text-header">Ahmad Subarjo, S.T</h4>
            <p class="text-primary text-xs font-bold uppercase tracking-tight">Waka. Kesiswaan</p>
          </div>

          <div class="group bg-white p-5 rounded-4xl shadow-sm border border-gray-100 text-center hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
            <div class="aspect-3/4 mb-5 rounded-xl overflow-hidden bg-slate-100">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" alt="Wakasek"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <h4 class="text-lg font-bold text-header">Rina Wijaya, M.Si</h4>
            <p class="text-primary text-xs font-bold uppercase tracking-tight">Waka. Humas</p>
          </div>
        </div>

        {{-- LEVEL 3: STAFF & KARYAWAN --}}
        <div class="space-y-12" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center">
            <h3 class="text-2xl font-black text-header uppercase tracking-widest">Staff & Karyawan</h3>
            <div class="h-1 w-20 bg-blue-600 mx-auto mt-2 rounded-full"></div>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="group bg-white p-3 rounded-2xl shadow-sm border border-gray-50 text-center">
              <div class="aspect-3/4 mb-3 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=200" alt="Staff"
                  class="w-full h-full object-cover group-hover:grayscale transition-all duration-500">
              </div>
              <h5 class="text-sm font-bold text-header leading-tight">H. Mulyono, S.E</h5>
              <p class="text-[10px] text-primary font-bold uppercase mt-1">Kepala TU</p>
            </div>

            <div class="group bg-white p-3 rounded-2xl shadow-sm border border-gray-50 text-center">
              <div class="aspect-3/4 mb-3 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=200" alt="Staff"
                  class="w-full h-full object-cover group-hover:grayscale transition-all duration-500">
              </div>
              <h5 class="text-sm font-bold text-header leading-tight">Santi Rahmawati</h5>
              <p class="text-[10px] text-primary font-bold uppercase mt-1">Bendahara</p>
            </div>

            <div class="group bg-white p-3 rounded-2xl shadow-sm border border-gray-50 text-center">
              <div class="aspect-3/4 mb-3 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=200" alt="Staff"
                  class="w-full h-full object-cover group-hover:grayscale transition-all duration-500">
              </div>
              <h5 class="text-sm font-bold text-header leading-tight">Eko Prasetyo</h5>
              <p class="text-[10px] text-primary font-bold uppercase mt-1">Toolman</p>
            </div>

            <div class="group bg-white p-3 rounded-2xl shadow-sm border border-gray-50 text-center">
              <div class="aspect-3/4 mb-3 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=200" alt="Staff"
                  class="w-full h-full object-cover group-hover:grayscale transition-all duration-500">
              </div>
              <h5 class="text-sm font-bold text-header leading-tight">Dewi Lestari</h5>
              <p class="text-[10px] text-primary font-bold uppercase mt-1">Pustakawan</p>
            </div>

            <div class="group bg-white p-3 rounded-2xl shadow-sm border border-gray-50 text-center">
              <div class="aspect-3/4 mb-3 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?auto=format&fit=crop&q=80&w=200" alt="Staff"
                  class="w-full h-full object-cover group-hover:grayscale transition-all duration-500">
              </div>
              <h5 class="text-sm font-bold text-header leading-tight">Bambang Pamungkas</h5>
              <p class="text-[10px] text-primary font-bold uppercase mt-1">Keamanan</p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
@endsection
