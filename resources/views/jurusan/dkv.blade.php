@extends('layouts.main')

@section('title')
  <title>Jurusan DKV - SMK Senopati</title>
  <style>
    .foto-praktek-swiper .swiper-pagination {
      bottom: 16px;
    }

    .foto-praktek-swiper .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      background: rgba(255, 255, 255, 0.6);
      opacity: 1;
      margin: 0 4px !important;
      transition: all 0.3s ease;
    }

    .foto-praktek-swiper .swiper-pagination-bullet-active {
      background: #fb7185;
      width: 22px;
      border-radius: 4px;
    }
  </style>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN KREATIF --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-rose-900 via-slate-900 to-violet-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (DKV) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
      {{-- Ikon Pen Tool --}}
      <div class="absolute top-1/4 left-10 animate-bounce duration-4500">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
      </div>
      {{-- Ikon Kamera --}}
      <div class="absolute bottom-1/4 right-20 animate-pulse duration-3500">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
          <path stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      {{-- Ikon Palet Warna --}}
      <div class="absolute top-1/2 right-1/4 opacity-40 animate-spin duration-15000">
        <svg class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.172-1.172a4 4 0 115.656 5.656l-1.172 1.172" />
        </svg>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-rose-500 rounded-full mix-blend-screen filter blur-[100px] opacity-25 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-violet-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-rose-300 uppercase tracking-wider">{{ $jurusan->kode_jurusan }}</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        {{ $jurusan->nama_jurusan }}
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        {{ $jurusan->deskripsi_hero }}
      </p>
    </div>
  </section>

  {{-- ISI DETAIL JURUSAN --}}
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        {{-- SISI KIRI: Konten Deskripsi Jurusan --}}
        <div class="lg:col-span-2 space-y-8" data-aos="fade-right">

          {{-- Header Section (Opsional, sebagai pembuka yang manis) --}}
          <div class="flex items-center gap-4 pl-2">
            <div class="w-14 h-14 bg-linear-to-br from-rose-100 to-amber-50 rounded-2xl flex items-center justify-center text-rose-600 shadow-inner border border-rose-200/50">
              <i class="bi bi-journal-richtext text-2xl"></i>
            </div>
            <div>
              <h2 class="text-3xl font-black text-slate-900 tracking-tight">Tentang Jurusan</h2>
              <p class="text-gray-500 text-sm font-medium">Informasi dan detail program keahlian</p>
            </div>
          </div>

          {{-- Wadah Card Premium untuk Konten Quill --}}
          <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl shadow-slate-200/40 border border-gray-100 relative overflow-hidden">

            {{-- Dekorasi Glow Latar Belakang --}}
            <div class="absolute top-0 right-0 w-72 h-72 bg-rose-100 rounded-full blur-3xl z-0 opacity-40 translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-56 h-56 bg-amber-50 rounded-full blur-3xl z-0 opacity-60 -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

            {{-- Modifikasi Super Styling untuk class Prose Tailwind --}}
            <div
              class="prose prose-lg prose-slate max-w-none relative z-10
                        prose-headings:font-black prose-headings:text-slate-800 prose-headings:tracking-tight
                        prose-h1:text-4xl prose-h1:mb-8
                        prose-h2:text-3xl prose-h2:border-b-2 prose-h2:border-gray-100 prose-h2:pb-4 prose-h2:mb-6 prose-h2:mt-10
                        prose-h3:text-2xl prose-h3:text-rose-600
                        prose-p:text-gray-600 prose-p:leading-relaxed prose-p:mb-6
                        prose-a:text-rose-600 prose-a:font-bold prose-a:no-underline hover:prose-a:underline hover:prose-a:text-rose-700
                        prose-ul:list-none prose-ul:pl-0 prose-li:relative prose-li:pl-7 prose-li:text-gray-600
                        prose-li:before:content-[''] prose-li:before:absolute prose-li:before:left-0 prose-li:before:top-3 prose-li:before:w-2 prose-li:before:h-2 prose-li:before:bg-rose-500 prose-li:before:rounded-full
                        prose-img:rounded-3xl prose-img:shadow-lg
                        prose-blockquote:border-l-4 prose-blockquote:border-rose-500 prose-blockquote:bg-linear-to-r prose-blockquote:from-rose-50 prose-blockquote:to-transparent prose-blockquote:py-3 prose-blockquote:px-6 prose-blockquote:rounded-r-2xl prose-blockquote:font-medium prose-blockquote:italic prose-blockquote:text-slate-700">
              {!! $jurusan->konten !!}
            </div>

          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        {{-- Tambahkan lg:sticky, lg:top-28, dan lg:self-start di sini --}}
        <div class="space-y-8 lg:sticky lg:top-32 lg:self-start" data-aos="fade-left">

          {{-- Prospek Card --}}
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl relative overflow-hidden">
            <h3 class="text-xl font-black mb-6">Prospek Karier</h3>
            <ul class="space-y-4">
              @foreach ($jurusan->peluang_kerja as $peluang)
                <li class="flex items-center gap-3 text-sm text-gray-300">
                  <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div> {{ $peluang }}
                </li>
              @endforeach
            </ul>
          </div>

          {{-- Foto Praktek — Swiper carousel dari galeri --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg border-4 border-white relative">
            @if ($galeri->count())
              <div class="swiper foto-praktek-swiper h-full w-full">
                <div class="swiper-wrapper">
                  @foreach ($galeri as $foto)
                    <div class="swiper-slide">
                      <img src="{{ Storage::url('berita/' . $foto->gambar) }}" alt="Siswa {{ $jurusan->kode_jurusan }} sedang praktek" class="w-full h-full object-cover">
                    </div>
                  @endforeach
                </div>

                {{-- Hanya pagination dots, arrow dihapus --}}
                <div class="swiper-pagination"></div>
              </div>
            @else
              <img src="{{ asset('assets/senop/img/banner.webp') }}" alt="Siswa {{ $jurusan->kode_jurusan }} sedang praktek" class="w-full h-full object-cover">
            @endif
          </div>

        </div>

      </div>
    </div>
  </section>
@endsection

@section('js')
  <script>
    new Swiper('.foto-praktek-swiper', {
      loop: {{ $galeri->count() > 2 ? 'true' : 'false' }},
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
@endsection
