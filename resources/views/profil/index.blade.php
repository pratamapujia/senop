@extends('layouts.main')

@section('title')
  <title>Profil - SMK Senopati</title>
@endsection

@section('main')
  {{-- ================= HERO SECTION ================= --}}
  <section class="relative -mt-32 pt-48 pb-24 lg:pt-56 lg:pb-32 bg-slate-900 overflow-hidden">

    {{-- 1. BACKGROUND GRADIENT --}}
    <div class="absolute inset-0 bg-linear-to-br from-blue-900 via-slate-900 to-indigo-900"></div>

    {{-- 2. ANIMATED BLOBS --}}
    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    {{-- 3. Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.08]" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;">
    </div>

    {{-- Gradient Fade Bottom (Soft Transition to Content) --}}
    <div class="absolute bottom-0 left-0 w-full h-32 bg-linear-to-t from-gray-50 to-transparent"></div>

    {{-- 4. Hero Content --}}
    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">

      {{-- Breadcrumb Modern --}}
      <div class="inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full bg-white/5 backdrop-blur-md border border-white/10 mb-8 shadow-sm">
        <a href="/" class="text-xs font-semibold text-gray-300 hover:text-white uppercase tracking-widest transition-colors">Beranda</a>
        <span class="text-gray-500 text-xs mt-0.5"><i class="bi bi-chevron-right"></i></span>
        <span class="text-xs font-semibold text-blue-300 uppercase tracking-widest">Profil Sekolah</span>
      </div>

      {{-- Typography --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight drop-shadow-sm">
        Profil <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-300 to-cyan-300">SMK Senopati</span>
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Mengenal lebih dekat sejarah, identitas, dan dedikasi kami dalam mencetak generasi penerus bangsa yang unggul, kompeten, dan berkarakter.
      </p>

    </div>
  </section>

  {{-- ================= SCHOOL IDENTITY SECTION ================= --}}
  <section class="pb-24 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 max-w-5xl">

      {{-- 1. HIGHLIGHT DATA CARDS --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 -mt-16 mb-16 relative z-20" data-aos="fade-up" data-aos-delay="100">

        {{-- Card NPSN --}}
        <div
          class="bg-white p-8 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100/50 flex flex-col items-center justify-center group hover:-translate-y-2 transition-all duration-300">
          <div
            class="w-14 h-14 rounded-full bg-blue-50 text-primary flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300">
            <i class="bi bi-upc-scan text-2xl"></i>
          </div>
          <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">NPSN</p>
          <h4 class="text-2xl font-black text-gray-800">20540104</h4>
        </div>

        {{-- Card Akreditasi --}}
        <div
          class="bg-white p-8 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100/50 flex flex-col items-center justify-center group hover:-translate-y-2 transition-all duration-300">
          <div
            class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
            <i class="bi bi-award text-2xl"></i>
          </div>
          <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Akreditasi</p>
          <h4 class="text-2xl font-black text-gray-800">A (Unggul)</h4>
        </div>

        {{-- Card Status --}}
        <div
          class="bg-white p-8 rounded-3xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-gray-100/50 flex flex-col items-center justify-center group hover:-translate-y-2 transition-all duration-300">
          <div
            class="w-14 h-14 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
            <i class="bi bi-building-check text-2xl"></i>
          </div>
          <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Status Sekolah</p>
          <h4 class="text-2xl font-black text-gray-800">Swasta</h4>
        </div>

      </div>

      {{-- 2. DETAIL IDENTITAS --}}
      <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <div class="p-8 md:p-12 lg:p-16">

          {{-- Section Header --}}
          <div class="mb-10 text-center md:text-left">
            <span class="text-primary font-bold tracking-widest uppercase text-sm bg-blue-50 px-4 py-1.5 rounded-full inline-block mb-3">Data Pokok</span>
            <h2 class="text-3xl font-black text-gray-800">Identitas Lengkap</h2>
          </div>

          {{-- Data Grid --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            {{-- Item: Nama --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors">
              <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0">
                <i class="bi bi-bank text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">Nama Resmi Sekolah</p>
                <p class="text-lg font-bold text-gray-800">SMKS Senopati</p>
              </div>
            </div>

            {{-- Item: Kepala Sekolah --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors">
              <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0">
                <i class="bi bi-person-badge text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">Kepala Sekolah</p>
                <p class="text-lg font-bold text-gray-800">Fathoni, M.Pd</p>
              </div>
            </div>

            {{-- Item: Kurikulum --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors">
              <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0">
                <i class="bi bi-journal-bookmark text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">Kurikulum</p>
                <p class="text-lg font-bold text-gray-800">Kurikulum Merdeka</p>
              </div>
            </div>

            {{-- Item: Tahun Berdiri --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors">
              <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0">
                <i class="bi bi-calendar-event text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">Tahun Berdiri</p>
                <p class="text-lg font-bold text-gray-800">1995</p>
              </div>
            </div>

            {{-- Item: SK Operasional --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors md:col-span-2">
              <div class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0">
                <i class="bi bi-file-earmark-text text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">SK Operasional</p>
                <p class="text-lg font-bold text-gray-800">20/14.02.07/02/IV/2025</p>
              </div>
            </div>

            {{-- Item: Alamat (Span Full) --}}
            <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition-colors md:col-span-2 bg-gray-50/50">
              <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-red-400 shrink-0 shadow-sm">
                <i class="bi bi-geo-alt-fill text-xl"></i>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-400 mb-1">Alamat Lengkap</p>
                <p class="text-lg font-bold text-gray-800 leading-relaxed">Jl. Raya Senopati No. 02, Sedati, Sidoarjo, Jawa Timur, 61253</p>
              </div>
            </div>

          </div>
        </div>

        {{-- FOOTER KARTU --}}
        <div class="bg-gray-50 border-t border-gray-100 p-8 flex flex-col md:flex-row md:justify-between items-center gap-4">
          <div class="flex items-center gap-3 text-gray-500 text-sm">
            <i class="bi bi-info-circle text-primary"></i>
            <p>Data ini diperbarui secara berkala sesuai sistem Dapodik.</p>
          </div>

          <a href="https://file.data.kemendikdasmen.go.id/sk/1164558-659614-265079-11651478-1293707739.pdf" target="_blank"
            class="inline-flex items-center gap-2 px-6 py-2.5 bg-white border border-gray-200 text-gray-700 font-bold rounded-full shadow-sm hover:bg-primary hover:border-primary hover:text-white transition-all duration-300">
            <i class="bi bi-download"></i> Unduh Sertifikat
          </a>
        </div>
      </div>

    </div>
  </section>
@endsection
