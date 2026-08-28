@extends('layouts.main')

@section('title')
  <title>Sejarah</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Sejarah</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Sejarah SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Marilah kita melihat sejarah SMK Senopati
      </p>

    </div>
  </section>

  {{-- HISTORY SECTION --}}
  <section class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">

      <div class="relative">
        {{-- Garis Tengah Timeline (Hanya tampil di Desktop) --}}
        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gray-200"></div>

        <div class="space-y-12">

          <div class="relative flex flex-col md:flex-row items-center group" data-aos="fade-up">
            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0">
              <div class="inline-block px-4 py-1 rounded-full bg-blue-600 text-white text-sm font-black mb-3 shadow-lg shadow-blue-200">1995</div>
              <h3 class="text-2xl font-black text-slate-900 mb-3">Awal Mula Pendirian</h3>
              <p class="text-gray-500 leading-relaxed">SMK Senopati didirikan di atas lahan seluas 2 hektar dengan visi awal mencetak tenaga ahli di bidang teknik mesin yang sangat dibutuhkan pada era
                industrialisasi saat itu.</p>
            </div>
            {{-- Titik Tengah --}}
            <div
              class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-blue-600 border-4 border-white shadow-sm hidden md:block group-hover:scale-150 transition-transform duration-300">
            </div>
            <div class="md:w-1/2"></div>
          </div>

          <div class="relative flex flex-col md:flex-row-reverse items-center group" data-aos="fade-up">
            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
              <div class="inline-block px-4 py-1 rounded-full bg-cyan-500 text-white text-sm font-black mb-3 shadow-lg shadow-cyan-200">2005</div>
              <h3 class="text-2xl font-black text-slate-900 mb-3">Ekspansi Bidang Keahlian</h3>
              <p class="text-gray-500 leading-relaxed">Seiring perkembangan teknologi, sekolah membuka jurusan Teknik Informatika dan Komunikasi untuk menjawab tantangan era digital gelombang pertama di
                Indonesia.</p>
            </div>
            {{-- Titik Tengah --}}
            <div
              class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-cyan-500 border-4 border-white shadow-sm hidden md:block group-hover:scale-150 transition-transform duration-300">
            </div>
            <div class="md:w-1/2"></div>
          </div>

          <div class="relative flex flex-col md:flex-row items-center group" data-aos="fade-up">
            <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0">
              <div class="inline-block px-4 py-1 rounded-full bg-indigo-600 text-white text-sm font-black mb-3 shadow-lg shadow-indigo-200">2018</div>
              <h3 class="text-2xl font-black text-slate-900 mb-3">Pencapaian Akreditasi A</h3>
              <p class="text-gray-500 leading-relaxed">Berhasil meraih predikat akreditasi 'Unggul' dari BAN-SM dan mulai menjalin kerjasama internasional dengan beberapa perusahaan manufaktur global.
              </p>
            </div>
            {{-- Titik Tengah --}}
            <div
              class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white shadow-sm hidden md:block group-hover:scale-150 transition-transform duration-300">
            </div>
            <div class="md:w-1/2"></div>
          </div>

          <div class="relative flex flex-col md:flex-row-reverse items-center group" data-aos="fade-up">
            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
              <div class="inline-block px-4 py-1 rounded-full bg-slate-900 text-white text-sm font-black mb-3 shadow-lg shadow-slate-300">Sekarang</div>
              <h3 class="text-2xl font-black text-slate-900 mb-3">Transformasi Digital Modern</h3>
              <p class="text-gray-500 leading-relaxed">Mengimplementasikan Kurikulum Merdeka dan menjadi sekolah rujukan digital dengan fasilitas smart classroom dan laboratorium terintegrasi cloud
                computing.</p>
            </div>
            {{-- Titik Tengah --}}
            <div
              class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-slate-900 border-4 border-white shadow-sm hidden md:block group-hover:scale-150 transition-transform duration-300">
            </div>
            <div class="md:w-1/2"></div>
          </div>

        </div>
      </div>

    </div>
  </section>
@endsection
