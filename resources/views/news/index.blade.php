@extends('layouts.main')

@section('title')
  <title>Berita</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Berita</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Kabar SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Temukan informasi terkini, prestasi siswa, dan artikel edukatif seputar kegiatan di SMK Senopati.
      </p>

    </div>
  </section>

  {{-- List Berita --}}
  <section class="py-16 bg-gray-50 relative">
    <div class="container mx-auto px-4">

      {{-- Layout Utama: 12 Kolom --}}
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">

        {{-- KOLOM KIRI: LIST BERITA (9 Kolom agar muat 3 card) --}}
        <div class="lg:col-span-9">

          {{-- Grid Berita: 1 di Mobile, 2 di Tablet, 3 di Desktop Besar --}}
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            {{-- LOOPING DATA --}}
            @forelse($berita as $item)
              {{-- Card Berita --}}
              {{-- @for ($i = 0; $i < 18; $i++) --}}
              {{-- Contoh Loop Dummy --}}
              <article
                class="bg-white rounded-4xl border border-gray-100 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col overflow-hidden group h-full"
                data-aos="fade-up">

                {{-- Image --}}
                <div class="relative h-48 overflow-hidden">
                  <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-colors z-10"></div>
                  <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="Image" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">

                  {{-- Kategori Badge --}}
                  <span class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur text-primary text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow-sm">
                    {{ $item->kategori }}
                  </span>
                </div>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                  <div class="flex items-center gap-3 text-[11px] text-gray-500 mb-3 font-medium">
                    <div class="flex items-center gap-1"><i class="bi bi-calendar3 text-accent"></i> {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</div>
                    <div class="flex items-center gap-1"><i class="bi bi-person text-accent"></i> {{ $item->author->name }}</div>
                  </div>

                  <h3 class="text-lg font-bold text-header mb-2 leading-snug group-hover:text-primary transition-colors line-clamp-2">
                    <a href="{{ route('detail-berita', $item->slug) }}">
                      {{ $item->judul }}
                    </a>
                  </h3>

                  <p class="text-gray-600 text-xs line-clamp-3 mb-4 flex-1 leading-relaxed">
                    {{ Str::limit(strip_tags($item->konten), 100) }}
                  </p>

                  <a href="{{ route('detail-berita', $item->slug) }}" class="inline-flex items-center text-xs font-bold text-primary hover:text-accent w-max group/link mt-auto">
                    Baca Selengkapnya
                    <i class="bi bi-arrow-right ml-1.5 transform group-hover/link:translate-x-1 transition-transform"></i>
                  </a>
                </div>
              </article>
              {{-- @endfor --}}

            @empty
              <div class="col-span-full py-24 flex flex-col items-center justify-center text-center px-4">

                {{-- Ikon Ilustrasi dengan Efek Glowing Lembut --}}
                <div class="relative w-28 h-28 flex items-center justify-center bg-gray-50 rounded-full mb-8 shadow-inner border border-gray-100">
                  <div class="absolute inset-0 bg-blue-100 rounded-full blur-xl opacity-60"></div>

                  {{-- Ganti ikon otomatis jika sedang mencari sesuatu --}}
                  @if (request('q') || isset($kategori))
                    <i class="bi bi-search text-5xl text-primary relative z-10 opacity-80"></i>
                  @else
                    <i class="bi bi-newspaper text-5xl text-primary relative z-10 opacity-80"></i>
                  @endif
                </div>

                {{-- Pesan Berdasarkan Konteks (Pencarian vs Kosong Total) --}}
                @if (request('q') || isset($kategori))
                  <h3 class="text-2xl font-black text-gray-800 mb-3">Pencarian Tidak Ditemukan</h3>
                  <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                    Maaf, kami tidak menemukan berita yang cocok dengan
                    @if (request('q'))
                      kata kunci <span class="font-bold text-primary">"{{ request('q') }}"</span>
                    @endif
                    @if (request('q') && isset($kategori))
                      pada
                    @endif
                    @if (isset($kategori))
                      kategori <span class="font-bold text-primary">"{{ $kategori }}"</span>
                    @endif.
                    Silakan coba gunakan kata kunci lain.
                  </p>

                  {{-- Tombol Reset CTA --}}
                  <a href="{{ route('berita') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-full shadow-lg shadow-primary/30 hover:bg-accent transition-all hover:-translate-y-1">
                    <i class="bi bi-arrow-clockwise"></i> Tampilkan Semua Berita
                  </a>
                @else
                  <h3 class="text-2xl font-black text-gray-800 mb-3">Belum Ada Berita</h3>
                  <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                    Saat ini belum ada artikel atau berita terbaru yang dipublikasikan. Nantikan pembaruan informasi menarik dari kami selanjutnya.
                  </p>

                  {{-- Tombol Kembali CTA --}}
                  <a href="/"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 text-gray-600 font-bold rounded-full shadow-sm hover:bg-gray-50 hover:text-primary transition-all hover:-translate-y-1">
                    <i class="bi bi-house-door"></i> Kembali ke Beranda
                  </a>
                @endif

              </div>
            @endforelse
          </div>

          {{-- Pagination --}}
          <div class="mt-12">
            {{ $berita->links('pagination::tailwind') }}
          </div>

        </div>

        {{-- KOLOM KANAN: SIDEBAR (3 Kolom) --}}
        <div class="lg:col-span-3">

          {{-- STICKY WRAPPER --}}
          {{-- Class 'sticky top-32' membuat elemen ini diam saat di-scroll --}}
          <div class="sticky top-32 space-y-6">

            {{-- Widget: Search --}}
            <div class="bg-white p-5 rounded-4xl border border-gray-100 shadow-sm" data-aos="fade-left" data-aos-delay="100">
              <h4 class="font-bold text-header mb-3 text-base">Cari Berita</h4>

              {{-- 1. Ubah action mengarah ke rute halaman list berita (sesuaikan nama routenya) --}}
              <form action="{{ route('berita') }}" method="GET" class="relative">

                {{-- 2. Tambahkan value="{{ request('q') }}" agar teks yang dicari tidak hilang setelah enter --}}
                <input type="text" name="q" placeholder="Kata kunci..." value="{{ request('q') }}"
                  class="w-full pl-4 pr-10 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-accent focus:ring-2 focus:ring-blue-100 transition-all text-sm">

                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary transition-colors">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </div>

            {{-- Widget: Kategori --}}
            <div class="bg-white p-6 rounded-4xl border border-gray-100 shadow-sm" data-aos="fade-left" data-aos-delay="200">
              <h4 class="font-bold text-header mb-4 text-base relative inline-block">
                Kategori
                <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-accent rounded-full"></span>
              </h4>
              <ul class="space-y-2">
                @php
                  $categories = ['Prestasi', 'Agenda', 'Artikel', 'Pengumuman', 'Ekskul'];
                @endphp

                {{-- Menampilkan semua kategori --}}
                <li>
                  <a href="{{ route('berita') }}" class="flex items-center justify-between group p-2 hover:bg-blue-50 rounded-lg transition-colors">
                    <span class="text-gray-600 text-sm font-medium group-hover:text-primary transition-colors">Semua Kategori</span>
                    <span class="w-5 h-5 flex items-center justify-center bg-gray-100 text-[10px] text-gray-500 rounded-full group-hover:bg-blue-200 group-hover:text-accent transition-colors">
                      {{ \App\Models\Berita::where('status', 'published')->count() }}
                    </span>
                  </a>
                </li>

                @foreach ($categories as $cat)
                  @php
                    // Hitung jumlah berita yang 'published' berdasarkan kategori
                    $count = \App\Models\Berita::where('status', 'published')->where('kategori', $cat)->count();
                  @endphp
                  <li>
                    <a href="{{ route('berita.category', $cat) }}" class="flex items-center justify-between group p-2 hover:bg-blue-50 rounded-lg transition-colors">
                      <span class="text-gray-600 text-sm font-medium group-hover:text-primary transition-colors">{{ $cat }}</span>
                      {{-- Menampilkan jumlah data asli dari database --}}
                      <span class="w-5 h-5 flex items-center justify-center bg-gray-100 text-[10px] text-gray-500 rounded-full group-hover:bg-blue-200 group-hover:text-accent transition-colors">
                        {{ $count }}
                      </span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>

            {{-- Widget: Banner PPDB (Kecil) --}}
            <div class="relative overflow-hidden rounded-4xl aspect-3/4 group" data-aos="fade-left" data-aos-delay="300">
              <img src="{{ asset('assets/senop/img/hero.webp') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="PPDB">
              <div class="absolute inset-0 bg-linear-to-t from-blue-900/90 to-transparent"></div>
              <div class="absolute bottom-0 left-0 p-5 text-white">
                <h4 class="text-lg font-black mb-1">SPMB {{ date('Y') }}</h4>
                <p class="text-blue-200 text-xs mb-3">Ayo menjadi bagian dari masa depan SMK Senopati.</p>
                <a href="#" class="inline-block bg-white text-blue-900 text-xs font-bold px-4 py-2 rounded-full hover:bg-blue-50 transition-colors">Daftar Sekarang</a>
              </div>
            </div>

          </div>
          {{-- End Sticky Wrapper --}}

        </div>

      </div>
    </div>
  </section>
@endsection
