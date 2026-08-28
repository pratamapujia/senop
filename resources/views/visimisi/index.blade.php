@extends('layouts.main')

@section('title')
  <title>Visi dan Misi</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Visi & Misi</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Visi & Misi
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Visi dan Misi SMK Senopati
      </p>

    </div>
  </section>
  {{-- VISI & MISI SECTION --}}
  <section class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-5xl">

      {{-- BAGIAN VISI --}}
      <div class="mb-20" data-aos="fade-up">
        <div class="text-center mb-10">
          <span class="px-4 py-1.5 rounded-full bg-blue-100 text-primary text-xs font-bold uppercase tracking-widest">Tujuan Utama</span>
          <h2 class="text-4xl font-black text-header mt-4">Visi Kami</h2>
        </div>

        <div class="relative p-10 md:p-16 bg-white rounded-[40px] shadow-xl shadow-blue-900/5 border border-gray-100 text-center">
          {{-- Dekorasi Tanda Kutip --}}
          <div class="absolute top-10 left-10 text-blue-100 opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
            </svg>
          </div>

          <p class="relative z-10 text-2xl md:text-3xl font-medium text-slate-800 italic leading-relaxed">
            "Menjadi lembaga pendidikan kejuruan yang unggul, berkarakter mulia, dan kompetitif di tingkat nasional maupun internasional pada tahun 2030."
          </p>
        </div>
      </div>

      {{-- BAGIAN MISI --}}
      <div data-aos="fade-up" data-aos-delay="200">
        <div class="text-center mb-12">
          <span class="px-4 py-1.5 rounded-full bg-indigo-100 text-accent text-xs font-bold uppercase tracking-widest">Langkah Nyata</span>
          <h2 class="text-4xl font-black text-header mt-4">Misi Sekolah</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          {{-- Misi Item 1 --}}
          <div class="group p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md hover:border-blue-300 transition-all duration-300 relative overflow-hidden">
            <span class="absolute -right-4 -bottom-4 text-8xl font-black text-slate-50 group-hover:text-blue-50 transition-colors">01</span>
            <div class="relative z-10">
              <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
              </div>
              <h4 class="text-xl font-bold text-slate-800 mb-3">Pendidikan Berkualitas</h4>
              <p class="text-gray-500 leading-relaxed">Menyelenggarakan proses pembelajaran yang inovatif berbasis teknologi informasi dan komunikasi.</p>
            </div>
          </div>

          {{-- Misi Item 2 --}}
          <div class="group p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md hover:border-blue-300 transition-all duration-300 relative overflow-hidden">
            <span class="absolute -right-4 -bottom-4 text-8xl font-black text-slate-50 group-hover:text-blue-50 transition-colors">02</span>
            <div class="relative z-10">
              <div class="w-12 h-12 bg-cyan-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-cyan-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <h4 class="text-xl font-bold text-slate-800 mb-3">Karakter Siswa</h4>
              <p class="text-gray-500 leading-relaxed">Membentuk pribadi siswa yang religius, berintegritas, dan memiliki jiwa kepemimpinan.</p>
            </div>
          </div>

          {{-- Tambahkan Misi Lainnya di sini --}}

        </div>
      </div>

    </div>
  </section>
@endsection
