@extends('layouts.main')

@section('title')
  <title>Jurusan TSM - SMK Senopati</title>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN SEPEDA MOTOR --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-red-900 via-slate-900 to-rose-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (TSM) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-25">
      {{-- Ikon Sepeda Motor --}}
      <div class="absolute top-1/4 right-10 animate-bounce duration-4000">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M5 13a2 2 0 100 4 2 2 0 000-4zm14 0a2 2 0 100 4 2 2 0 000-4zM6 15l3-4h5l2 4m-3-9l1 2h.01M7 15h10" />
        </svg>
      </div>
      {{-- Ikon Busi / Spark Plug --}}
      <div class="absolute bottom-1/4 left-20 animate-pulse duration-3000">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
      </div>
      {{-- Ikon Speedometer --}}
      <div class="absolute top-1/2 left-1/3 opacity-30 animate-spin duration-20000">
        <svg class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-red-500 rounded-full mix-blend-screen filter blur-[100px] opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-rose-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-red-400 uppercase tracking-wider">TSM</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Teknik Sepeda Motor
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Ahli dalam perawatan dan perbaikan mesin roda dua dengan standar industri internasional dan teknologi injeksi terbaru.
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
            <h2 class="text-3xl font-black text-slate-900 mb-6">Teknik Sepeda Motor</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              Teknik Sepeda Motor membekali siswa dengan keterampilan dalam perawatan, perbaikan, diagnosis, dan teknologi kendaraan roda dua. Pembelajaran menggabungkan teori dan praktik agar siswa
              terbiasa bekerja secara teliti, disiplin, dan sesuai standar dunia industri.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Materi 1 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-red-300 transition-all">
              <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 mb-5">
                <i class="fa-solid fa-wrench"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Perawatan dan Service Sepeda Motor</h4>
              <p class="text-sm text-gray-500">Overhaul mesin, penyetelan katup, dan pemeliharaan sistem pendingin serta pelumasan mesin roda dua.</p>
            </div>
            {{-- Materi 2 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-slate-300 transition-all">
              <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 mb-5">
                <i class="fa-solid fa-gas-pump"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Sistem Injeksi Motor</h4>
              <p class="text-sm text-gray-500">Diagnosa sensor, reset ECU, dan pembersihan injektor menggunakan alat scan khusus standar pabrikan.</p>
            </div>
            {{-- Materi 3 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-slate-300 transition-all">
              <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 mb-5">
                <i class="fa-solid fa-car-battery"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Sistem Kelistrikan Motor</h4>
              <p class="text-sm text-gray-500">Mempelajari tentang Kelistrikan Motor, pengaturan tegangan, dan pemeliharaan kelistrikan.</p>
            </div>
            {{-- Materi 4 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-slate-300 transition-all">
              <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 mb-5">
                <i class="fa-solid fa-motorcycle"></i>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Teknologi Motor Listrik</h4>
              <p class="text-sm text-gray-500">Mempelajari tentang teknologi motor listrik, pemeliharaan dan perawatan motor listrik.</p>
            </div>
          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        <div class="space-y-8" data-aos="fade-left">
          {{-- Prospek Card --}}
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl relative overflow-hidden">
            <h3 class="text-xl font-black mb-6">Prospek Karier</h3>
            <ul class="space-y-4">
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div> Teknisi Bengkel Resmi (Honda/Yamaha)
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div> Mekanik Tim Balap (Racing Team)
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div> Entrepreneur Bengkel Modifikasi
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div> Quality Control Industri Manufaktur
              </li>
            </ul>
          </div>

          {{-- Foto Praktek TSM 3:4 --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg border-4 border-white group">
            <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?auto=format&fit=crop&q=80&w=600" alt="Siswa TSM sedang praktek"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
