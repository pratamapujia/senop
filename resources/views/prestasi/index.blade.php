@extends('layouts.main')

@section('title')
  <title>Prestasi</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Prestasi</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Prestasi
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Beberapa prestasi siswa siswi SMK Senopati
      </p>

    </div>
  </section>

  {{-- PRESTASI SECTION --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">

      {{-- STATS SINGKAT --}}
      <div class="flex flex-wrap justify-center gap-8 md:gap-16 mb-20" data-aos="fade-up">
        <div class="text-center">
          <h4 class="text-4xl font-black text-slate-900">50+</h4>
          <p class="text-sm font-bold text-blue-600 uppercase tracking-widest mt-1">Medali Emas</p>
        </div>
        <div class="text-center">
          <h4 class="text-4xl font-black text-slate-900">120+</h4>
          <p class="text-sm font-bold text-cyan-500 uppercase tracking-widest mt-1">Prestasi Nasional</p>
        </div>
        <div class="text-center">
          <h4 class="text-4xl font-black text-slate-900">15</h4>
          <p class="text-sm font-bold text-indigo-600 uppercase tracking-widest mt-1">Kerja Sama Internasional</p>
        </div>
      </div>

      {{-- DAFTAR PRESTASI --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">

        <div class="group bg-white p-2 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 flex flex-col sm:flex-row items-center gap-6" data-aos="fade-up"
          data-aos-delay="100">
          <div class="w-full sm:w-48 aspect-3/4 rounded-4xl overflow-hidden bg-slate-100 shrink-0">
            {{-- Foto Dokumentasi Prestasi --}}
            <img src="https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?auto=format&fit=crop&q=80&w=400" alt="Prestasi"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
          </div>
          <div class="p-6 sm:pl-0 pr-8">
            <div class="flex items-center gap-3 mb-3">
              <span class="px-3 py-1 bg-blue-600 text-white text-[10px] font-bold rounded-full uppercase">Internasional</span>
              <span class="text-gray-400 text-xs font-bold">2024</span>
            </div>
            <h3 class="text-xl font-black text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">Juara 1 World Robot Olympiad</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Tim Robotik SMK Senopati berhasil meraih medali emas dalam kategori 'Innovation Solution' di Berlin, Jerman.</p>
          </div>
        </div>

        <div class="group bg-white p-2 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 flex flex-col sm:flex-row items-center gap-6" data-aos="fade-up"
          data-aos-delay="200">
          <div class="w-full sm:w-48 aspect-3/4 rounded-4xl overflow-hidden bg-slate-100 shrink-0">
            <img src="https://images.unsplash.com/photo-1526676037777-05a232554f77?auto=format&fit=crop&q=80&w=400" alt="Prestasi"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
          </div>
          <div class="p-6 sm:pl-0 pr-8">
            <div class="flex items-center gap-3 mb-3">
              <span class="px-3 py-1 bg-cyan-500 text-white text-[10px] font-bold rounded-full uppercase">Nasional</span>
              <span class="text-gray-400 text-xs font-bold">2023</span>
            </div>
            <h3 class="text-xl font-black text-slate-900 mb-2 group-hover:text-cyan-600 transition-colors">Medali Emas LKS Nasional</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Keberhasilan dalam bidang IT Network System Administration yang diselenggarakan oleh Kemendikbudristek.</p>
          </div>
        </div>

      </div>

      {{-- PAGINATION --}}
      <div class="mt-20 flex justify-center">
        <nav class="flex items-center gap-3 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl text-gray-400 hover:bg-gray-50 transition-all">&larr;</a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl bg-blue-600 text-white font-bold shadow-lg shadow-blue-200">1</a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl text-gray-600 font-bold hover:bg-gray-50 transition-all">2</a>
          <a href="#" class="w-10 h-10 flex items-center justify-center rounded-xl text-gray-400 hover:bg-gray-50 transition-all">&rarr;</a>
        </nav>
      </div>

    </div>
  </section>
@endsection
