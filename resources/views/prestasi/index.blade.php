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
    <div class="container mx-auto px-4 max-w-7xl">

      {{-- STATS SINGKAT DINAMIS --}}
      <div class="flex flex-wrap justify-center gap-12 md:gap-24 mb-20" data-aos="fade-up">

        <div class="text-center relative">
          <h4 class="text-5xl font-black text-slate-900">{{ $totalPrestasi }}</h4>
          <p class="text-sm font-bold text-blue-600 uppercase tracking-widest mt-2">Total Prestasi</p>
          {{-- Garis Pemisah (Hanya Muncul di Desktop) --}}
          <div class="hidden md:block absolute -right-12 top-1/2 -translate-y-1/2 w-px h-12 bg-gray-200"></div>
        </div>

        <div class="text-center relative">
          <h4 class="text-5xl font-black text-slate-900">{{ $countAkademik }}</h4>
          <p class="text-sm font-bold text-cyan-500 uppercase tracking-widest mt-2">Akademik</p>
          <div class="hidden md:block absolute -right-12 top-1/2 -translate-y-1/2 w-px h-12 bg-gray-200"></div>
        </div>

        <div class="text-center">
          <h4 class="text-5xl font-black text-slate-900">{{ $countNonAkademik }}</h4>
          <p class="text-sm font-bold text-indigo-600 uppercase tracking-widest mt-2">Non-Akademik</p>
        </div>

      </div>

      {{-- DAFTAR PRESTASI (Diubah menjadi 3 Kolom & Card Vertikal) --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse ($prestasi as $item)
          <div class="group bg-white p-3 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 flex flex-col" data-aos="fade-up">

            {{-- Foto Dokumentasi Prestasi (Di atas) --}}
            <div class="w-full aspect-4/3 rounded-4xl overflow-hidden bg-slate-100 relative shrink-0">
              <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

              {{-- Badge Kategori --}}
              <div class="absolute top-4 left-4">
                @if ($item->kategori->slug == 'prestasi-akademik')
                  <span class="px-3 py-1.5 bg-cyan-500 text-white text-[10px] font-bold rounded-full uppercase shadow-sm">Akademik</span>
                @else
                  <span class="px-3 py-1.5 bg-indigo-500 text-white text-[10px] font-bold rounded-full uppercase shadow-sm">Non-Akademik</span>
                @endif
              </div>
            </div>

            {{-- Teks & Detail Prestasi (Di bawah) --}}
            <div class="p-6 flex flex-col flex-1">
              <div class="flex items-center gap-3 mb-3">
                <span class="text-gray-400 text-xs font-bold">{{ $item->created_at->translatedFormat('d F Y') }}</span>
              </div>

              <h3 class="text-xl font-black text-slate-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">
                <a href="{{ route('detail-berita', $item->slug) }}">{{ $item->judul }}</a>
              </h3>

              <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4 flex-1">
                {{ Str::limit(strip_tags($item->konten), 120) }}
              </p>

              <a href="{{ route('detail-berita', $item->slug) }}" class="inline-flex items-center text-xs font-bold text-blue-600 hover:text-blue-800 w-max group/link mt-auto">
                Baca Detail <i class="bi bi-arrow-right ml-1 transform group-hover/link:translate-x-1 transition-transform"></i>
              </a>
            </div>

          </div>
        @empty
          <div class="col-span-full py-24 flex flex-col items-center justify-center text-center px-4" data-aos="fade-up">
            <div class="relative w-28 h-28 flex items-center justify-center bg-gray-50 rounded-full mb-8 shadow-inner border border-gray-100">
              <div class="absolute inset-0 bg-blue-100 rounded-full blur-xl opacity-60"></div>
              <i class="bi bi-trophy text-5xl text-primary relative z-10 opacity-80"></i>
            </div>
            <h3 class="text-2xl font-black text-slate-800 mb-3">Belum Ada Prestasi</h3>
            <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
              Data prestasi siswa saat ini belum dipublikasikan. Nantikan pembaruan informasi selanjutnya.
            </p>
          </div>
        @endforelse

      </div>

      {{-- PAGINATION --}}
      <div class="mt-20">
        {{ $prestasi->links('layouts.pagination') }}
      </div>

    </div>
  </section>
@endsection
