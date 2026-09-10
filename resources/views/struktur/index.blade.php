@extends('layouts.main')

@section('title')
  <title>Struktur Organisasi</title>
@endsection

@section('css')
  <style>
    /* Styling Paginasi Kustom untuk Swiper */
    .org-swiper-pagination .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      background: #cbd5e1;
      opacity: 1;
      transition: all 0.3s ease;
    }

    .org-swiper-pagination .swiper-pagination-bullet-active {
      background: #2563eb;
      width: 24px;
      border-radius: 4px;
    }
  </style>
@endsection

@section('main')
  {{-- HERO SECTION --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-blue-900 via-slate-900 to-indigo-900"></div>
    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>
    <div class="absolute inset-0 opacity-[0.15]" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;">
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Beranda</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Struktur Organisasi</span>
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Struktur Organisasi
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Jajaran dewan guru dan staf karyawan SMK Senopati
      </p>
    </div>
  </section>

  {{-- ORGANIZATIONAL STRUCTURE SECTION --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">

      {{-- LEVEL 1: KEPALA SEKOLAH --}}
      @if ($kepsek)
        <div class="flex justify-center mb-16" data-aos="fade-up">
          <div class="group relative">
            <div class="absolute -inset-1 bg-linear-to-r from-blue-600 to-indigo-500 rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
            <div class="relative bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100 text-center w-72 md:w-80">
              <div class="aspect-3/4 mb-5 rounded-2xl overflow-hidden shadow-inner bg-slate-100 border border-gray-50">
                <img src="{{ Storage::url('struktur/' . $kepsek->foto) }}" alt="{{ $kepsek->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  onerror="this.src='{{ asset('assets/senop/img/none.jpg') }}'">
              </div>
              <h3 class="text-xl font-black text-slate-800 line-clamp-1" title="{{ $kepsek->nama_lengkap }}">{{ $kepsek->nama_lengkap }}</h3>
              <p class="text-primary font-bold text-xs uppercase tracking-widest mt-1">{{ $kepsek->jabatan }}</p>
            </div>
          </div>
        </div>
      @endif

      {{-- LEVEL 2: WAKIL KEPALA SEKOLAH (5 Kolom) --}}
      @if ($wakasek && $wakasek->count() > 0)
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-24" data-aos="fade-up" data-aos-delay="100">
          @foreach ($wakasek as $waka)
            <div class="group bg-white p-4 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-lg hover:-translate-y-2 transition-all duration-300 flex flex-col h-full">
              <div class="aspect-3/4 mb-4 rounded-2xl overflow-hidden bg-slate-50 relative">
                <div class="absolute inset-0 bg-linear-to-t from-slate-900/10 to-transparent z-10 pointer-events-none"></div>
                <img src="{{ Storage::url('struktur/' . $waka->foto) }}" alt="{{ $waka->nama_lengkap }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  onerror="this.src='{{ asset('assets/senop/img/none.jpg') }}'">
              </div>
              <div class="mt-auto">
                <h4 class="text-sm font-bold text-slate-800 leading-snug line-clamp-2" title="{{ $waka->nama_lengkap }}">{{ $waka->nama_lengkap }}</h4>
                <p class="text-primary text-[10px] font-bold uppercase tracking-widest mt-1.5 line-clamp-1">{{ $waka->jabatan }}</p>
              </div>
            </div>
          @endforeach
        </div>
      @endif

      {{-- LEVEL 3: KAKOMKA (SWIPER GRID) --}}
      @if (isset($kakomka) && $kakomka->count() > 0)
        <div class="space-y-10 mb-24" data-aos="fade-up" data-aos-delay="150">
          <div class="text-center">
            <h3 class="text-2xl font-black text-slate-800 uppercase tracking-widest">Ketua Kompetensi Keahlian</h3>
            <div class="h-1 w-20 bg-blue-600 mx-auto mt-3 rounded-full"></div>
          </div>
          <div class="relative px-2 md:px-8">
            <div class="swiper kakomka-swiper pb-10">
              <div class="swiper-wrapper pb-10">
                @foreach ($kakomka as $k)
                  <div class="swiper-slide h-auto">
                    <div class="group bg-white p-4 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-all duration-300 h-full flex flex-col">
                      <div class="aspect-3/4 mb-4 rounded-2xl overflow-hidden bg-slate-50 relative">
                        <img src="{{ Storage::url('struktur/' . $k->foto) }}" alt="{{ $k->nama_lengkap }}"
                          class="w-full h-full object-cover group-hover:scale-105 group-hover:grayscale transition-all duration-500" onerror="this.src='{{ asset('assets/senop/img/none.jpg') }}'">
                      </div>
                      <div class="mt-auto">
                        <h5 class="text-sm font-bold text-slate-800 leading-snug line-clamp-2" title="{{ $k->nama_lengkap }}">{{ $k->nama_lengkap }}</h5>
                        <p class="text-[10px] text-gray-500 font-medium uppercase tracking-wider mt-1.5">{{ $k->jabatan ?? 'Kakomka' }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="swiper-pagination org-swiper-pagination bottom-0"></div>
            </div>
          </div>
        </div>
      @endif

      {{-- LEVEL 4: DEWAN GURU (SWIPER GRID) --}}
      @if ($guru && $guru->count() > 0)
        <div class="space-y-10 mb-24" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center">
            <h3 class="text-2xl font-black text-slate-800 uppercase tracking-widest">Dewan Guru</h3>
            <div class="h-1 w-20 bg-blue-600 mx-auto mt-3 rounded-full"></div>
          </div>
          <div class="relative px-2 md:px-8">
            <div class="swiper guru-swiper pb-10">
              <div class="swiper-wrapper pb-10">
                @foreach ($guru as $g)
                  <div class="swiper-slide h-auto">
                    <div class="group bg-white p-4 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-all duration-300 h-full flex flex-col">
                      <div class="aspect-3/4 mb-4 rounded-2xl overflow-hidden bg-slate-50 relative">
                        <img src="{{ Storage::url('struktur/' . $g->foto) }}" alt="{{ $g->nama_lengkap }}"
                          class="w-full h-full object-cover group-hover:scale-105 group-hover:grayscale transition-all duration-500" onerror="this.src='{{ asset('assets/senop/img/none.jpg') }}'">
                      </div>
                      <div class="mt-auto">
                        <h5 class="text-sm font-bold text-slate-800 leading-snug line-clamp-2" title="{{ $g->nama_lengkap }}">{{ $g->nama_lengkap }}</h5>
                        <p class="text-[10px] text-gray-500 font-medium uppercase tracking-wider mt-1.5">{{ $g->jabatan ?? 'Guru' }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="swiper-pagination org-swiper-pagination bottom-0"></div>
            </div>
          </div>
        </div>
      @endif

      {{-- LEVEL 5: STAFF & KARYAWAN (SWIPER GRID) --}}
      @if ($staff && $staff->count() > 0)
        <div class="space-y-10" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center">
            <h3 class="text-2xl font-black text-slate-800 uppercase tracking-widest">Staf & Karyawan</h3>
            <div class="h-1 w-20 bg-blue-600 mx-auto mt-3 rounded-full"></div>
          </div>
          <div class="relative px-2 md:px-8">
            <div class="swiper staff-swiper pb-10">
              <div class="swiper-wrapper pb-10">
                @foreach ($staff as $s)
                  <div class="swiper-slide h-auto">
                    <div class="group bg-white p-4 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-all duration-300 h-full flex flex-col">
                      <div class="aspect-3/4 mb-4 rounded-2xl overflow-hidden bg-slate-50 relative">
                        <img src="{{ Storage::url('struktur/' . $s->foto) }}" alt="{{ $s->nama_lengkap }}"
                          class="w-full h-full object-cover group-hover:scale-105 group-hover:grayscale transition-all duration-500" onerror="this.src='{{ asset('assets/senop/img/none.jpg') }}'">
                      </div>
                      <div class="mt-auto">
                        <h5 class="text-sm font-bold text-slate-800 leading-snug line-clamp-2" title="{{ $s->nama_lengkap }}">{{ $s->nama_lengkap }}</h5>
                        <p class="text-[10px] text-gray-500 font-medium uppercase tracking-wider mt-1.5">{{ $s->jabatan }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="swiper-pagination org-swiper-pagination bottom-0"></div>
            </div>
          </div>
        </div>
      @endif

      {{-- EMPTY STATE --}}
      @if (!$kepsek && (!isset($wakasek) || $wakasek->count() == 0) && (!isset($kakomka) || $kakomka->count() == 0) && (!isset($guru) || $guru->count() == 0) && (!isset($staff) || $staff->count() == 0))
        <div class="py-24 flex flex-col items-center justify-center text-center px-4" data-aos="fade-up">
          <div class="relative w-28 h-28 flex items-center justify-center bg-gray-50 rounded-full mb-8 shadow-inner border border-gray-100">
            <div class="absolute inset-0 bg-blue-100 rounded-full blur-xl opacity-60"></div>
            <i class="bi bi-person-lines-fill text-5xl text-primary relative z-10 opacity-80"></i>
          </div>
          <h3 class="text-2xl font-black text-slate-800 mb-3">Data Pegawai Belum Tersedia</h3>
          <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
            Struktur organisasi saat ini sedang dalam proses pembaruan. Silakan kembali lagi nanti untuk melihat jajaran pengurus, guru, dan staf SMK Senopati.
          </p>
          <a href="/"
            class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 text-gray-600 font-bold rounded-full shadow-sm hover:bg-gray-50 hover:text-primary transition-all hover:-translate-y-1">
            <i class="bi bi-house-door"></i> Kembali ke Beranda
          </a>
        </div>
      @endif

    </div>
  </section>
@endsection

@section('js')
  <script>
    document.addEventListener('DOMContentLoaded', function() {

      // Konfigurasi dasar untuk semua swiper (grid 2 baris, 5 kolom desktop)
      const swiperConfig = {
        slidesPerView: 2,
        spaceBetween: 16,
        grid: {
          rows: 2,
          fill: 'row'
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true, // <-- FITUR BARU: Berhenti otomatis saat mouse menyorot card
        },
        pagination: {
          el: '.org-swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          640: { // Tablet
            slidesPerView: 3,
            spaceBetween: 20,
            grid: {
              rows: 2,
              fill: 'row'
            },
            slidesPerGroup: 3,
          },
          1024: { // Desktop (5 Kolom)
            slidesPerView: 5,
            spaceBetween: 24,
            grid: {
              rows: 2,
              fill: 'row'
            },
            slidesPerGroup: 5, // Bergulir 5 card sekaligus
          },
        }
      };

      // Inisialisasi Swiper (dengan pengecekan agar tidak error jika data kosong)
      if (document.querySelector('.kakomka-swiper')) {
        new Swiper('.kakomka-swiper', {
          ...swiperConfig,
          pagination: {
            el: '.kakomka-swiper .swiper-pagination',
            clickable: true
          }
        });
      }

      if (document.querySelector('.guru-swiper')) {
        new Swiper('.guru-swiper', {
          ...swiperConfig,
          pagination: {
            el: '.guru-swiper .swiper-pagination',
            clickable: true
          }
        });
      }

      if (document.querySelector('.staff-swiper')) {
        new Swiper('.staff-swiper', {
          ...swiperConfig,
          pagination: {
            el: '.staff-swiper .swiper-pagination',
            clickable: true
          }
        });
      }

    });
  </script>
@endsection
