@extends('layouts.main')

@section('title')
  <title>Galeri</title>
@endsection

@section('main')
  {{-- ================= HERO SECTION (TIDAK DIUBAH) ================= --}}
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Galeri</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Galeri SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Beberapa jepretan dokumentasi kegiatan di SMK Senopati
      </p>
    </div>
  </section>
  {{-- ================= END HERO SECTION ================= --}}

  {{-- ================= GALLERY SECTION ================= --}}
  <section class="py-16 bg-gray-50 relative">
    <div class="container mx-auto px-4">

      {{-- Layout Utama: 12 Kolom --}}
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">

        {{-- KOLOM KIRI: LIST GALERI (9 Kolom) --}}
        <div class="lg:col-span-9">

          {{-- Photo Grid (Diubah ke grid-cols-3 agar pas dengan 9 kolom) --}}
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
            {{-- Looping Galeri --}}
            @forelse ($galeri as $item)
              {{-- Item Galeri[cite: 5] --}}
              <div class="group relative h-60 bg-gray-200 rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-blue-900/10 transition-all duration-500">

                {{-- Gambar Utama (Efek Grayscale & Zoom Sedikit)[cite: 5] --}}
                <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="{{ $item->judul }}"
                  class="w-full h-full object-cover transition-all duration-700 ease-in-out group-hover:scale-105 group-hover:grayscale">

                {{-- Overlay Gelap Permanen[cite: 5] --}}
                <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent pointer-events-none"></div>

                {{-- KATEGORI (Kiri Atas)[cite: 5] --}}
                <div
                  class="absolute top-4 left-4 bg-primary/50 backdrop-blur-md border border-primary/70 rounded-full px-3 py-1.5 flex items-center justify-center text-slate-100 opacity-100 scale-100 transition-all duration-500 z-10">
                  <span class="text-[10px] font-bold uppercase tracking-widest">{{ $item->kategori->nama ?? 'Umum' }}</span>
                </div>

                {{-- TOMBOL PERBESAR (Kanan Atas)[cite: 5] --}}
                <button type="button" onclick="openLightbox('{{ Storage::url('berita/' . $item->gambar) }}', '{{ $item->judul }}')"
                  class="absolute top-4 right-4 w-9 h-9 bg-primary backdrop-blur-md border border-primary rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 scale-50 group-hover:scale-100 transition-all duration-500 z-10 hover:bg-white/20 hover:border-white/30 hover:text-primary cursor-pointer">
                  <i class="bi bi-arrows-angle-expand text-sm font-bold"></i>
                </button>

                {{-- Konten Text Bawah (Judul & Deskripsi)[cite: 5] --}}
                <div class="absolute inset-0 p-5 flex flex-col justify-end text-left z-10 pointer-events-none">
                  <h3 class="text-white text-base font-bold mb-1 line-clamp-1 drop-shadow-md">
                    {{ $item->judul }}
                  </h3>
                  <p class="text-gray-200 text-[11px] line-clamp-2 drop-shadow-md">
                    {{ strip_tags($item->deskripsi) }}
                  </p>
                </div>
              </div>
            @empty
              {{-- State Kosong[cite: 5] --}}
              <div class="col-span-full py-24 flex flex-col items-center justify-center text-center px-4">
                <div class="relative w-28 h-28 flex items-center justify-center bg-gray-50 rounded-full mb-8 shadow-inner border border-gray-100">
                  <div class="absolute inset-0 bg-blue-100 rounded-full blur-xl opacity-60"></div>
                  @if (isset($kategoriAktif))
                    <i class="bi bi-search text-5xl text-primary relative z-10 opacity-80"></i>
                  @else
                    <i class="bi bi-images text-5xl text-primary relative z-10 opacity-80"></i>
                  @endif
                </div>

                @if (isset($kategoriAktif))
                  <h3 class="text-2xl font-black text-accent mb-3">Foto Tidak Ditemukan</h3>
                  <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                    Maaf, saat ini belum ada dokumentasi atau foto yang diunggah untuk kategori <span class="font-bold text-primary">"{{ $kategoriAktif->nama ?? $kategoriAktif }}"</span>. Silakan
                    jelajahi kategori lainnya.
                  </p>
                  <a href="{{ route('galeri') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-full shadow-lg shadow-primary/30 hover:bg-accent transition-all hover:-translate-y-1">
                    <i class="bi bi-grid-fill"></i> Tampilkan Semua Foto
                  </a>
                @else
                  <h3 class="text-2xl font-black text-accent mb-3">Belum Ada Dokumentasi</h3>
                  <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                    Saat ini belum ada album atau foto yang dipublikasikan di galeri. Nantikan dokumentasi kegiatan dan momen menarik selanjutnya.
                  </p>
                  <a href="/"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 text-gray-600 font-bold rounded-full shadow-sm hover:bg-gray-50 hover:text-primary transition-all hover:-translate-y-1">
                    <i class="bi bi-house-door"></i> Kembali ke Beranda
                  </a>
                @endif
              </div>
            @endforelse
          </div>

          {{-- PAGINATION[cite: 5] --}}
          <div class="mt-12">
            {{ $galeri->links('layouts.pagination') }}
          </div>

        </div>
        {{-- END KOLOM KIRI --}}

        {{-- KOLOM KANAN: SIDEBAR (3 Kolom) --}}
        <div class="lg:col-span-3">

          {{-- STICKY WRAPPER UTAMA --}}
          <div class="sticky top-28 space-y-6">

            {{-- Widget: Kategori --}}
            <div class="bg-white p-6 rounded-4xl border border-gray-100 shadow-sm" data-aos="fade-left" data-aos-delay="100">
              <h4 class="font-bold text-header mb-4 text-base relative inline-block">
                Kategori Galeri
                <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-accent rounded-full"></span>
              </h4>

              {{-- Wadah Scroll Kategori --}}
              <div class="max-h-56 overflow-y-auto overscroll-contain pr-2 custom-scrollbar" style="scrollbar-width: thin;" data-lenis-prevent>
                <ul class="space-y-2">

                  {{-- Tombol "Semua Kategori" --}}
                  <li>
                    <a href="{{ route('galeri') }}" class="flex items-center justify-between group p-2 rounded-lg transition-colors {{ empty($kategoriAktif) ? 'bg-blue-50' : 'hover:bg-blue-50' }}">
                      <span class="text-sm font-medium transition-colors {{ empty($kategoriAktif) ? 'text-primary' : 'text-gray-600 group-hover:text-primary' }}">
                        Semua Kategori
                      </span>
                      <span class="w-5 h-5 flex items-center justify-center bg-gray-100 text-[10px] text-gray-500 rounded-full group-hover:bg-blue-200 group-hover:text-accent transition-colors">
                        {{ $totalGaleri ?? 0 }}
                      </span>
                    </a>
                  </li>

                  {{-- Looping daftar kategori dari Controller ($kategoriList) --}}
                  @if (isset($kategoriList))
                    @foreach ($kategoriList as $item)
                      <li>
                        {{-- Sesuaikan route di bawah ini dengan route kategori galeri Anda (misal: galeri.category) --}}
                        <a href="{{ route('galeri', ['kategori' => $item->slug]) }}"
                          class="flex items-center justify-between group p-2 rounded-lg transition-colors {{ isset($kategoriAktif) && ($kategoriAktif->id ?? $kategoriAktif) == $item->id ? 'bg-blue-50' : 'hover:bg-blue-50' }}">
                          <span
                            class="text-sm font-medium transition-colors {{ isset($kategoriAktif) && ($kategoriAktif->id ?? $kategoriAktif) == $item->id ? 'text-primary' : 'text-gray-600 group-hover:text-primary' }}">
                            {{ $item->nama }}
                          </span>
                          <span class="w-5 h-5 flex items-center justify-center bg-gray-100 text-[10px] text-gray-500 rounded-full group-hover:bg-blue-200 group-hover:text-accent transition-colors">
                            {{ $item->galeri_count ?? 0 }}
                          </span>
                        </a>
                      </li>
                    @endforeach
                  @endif

                </ul>
              </div>
            </div>

            {{-- Widget: Banner SPMB --}}
            <div class="relative overflow-hidden rounded-4xl aspect-3/4 group" data-aos="fade-left" data-aos-delay="200">
              <img src="{{ asset('assets/senop/img/banner.webp') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="SPMB">
              <div class="absolute inset-0 bg-linear-to-t from-blue-900/90 to-transparent"></div>
              <div class="absolute bottom-0 left-0 p-5 text-white">
                <h4 class="text-lg font-black mb-1">SPMB {{ date('Y') }}</h4>
                <p class="text-blue-200 text-xs mb-3">Ayo menjadi bagian dari masa depan SMK Senopati.</p>
                <a href="#" class="inline-block bg-white text-blue-900 text-xs font-bold px-4 py-2 rounded-full hover:bg-blue-50 transition-colors">Daftar Sekarang</a>
              </div>
            </div>

          </div>
          {{-- END STICKY WRAPPER UTAMA --}}

        </div>
        {{-- END KOLOM KANAN --}}

      </div>
    </div>
  </section>

  {{-- Wadah Modal Lightbox (Tersembunyi secara default)[cite: 5] --}}
  <div id="gallery-lightbox" class="fixed inset-0 z-9999 bg-black/95 flex-col items-center justify-center hidden opacity-0 transition-opacity duration-300 backdrop-blur-sm">
    <button type="button" onclick="closeLightbox()"
      class="absolute top-6 right-6 w-12 h-12 flex items-center justify-center bg-white/10 hover:bg-red-500 text-white rounded-full transition-colors duration-300">
      <i class="bi bi-x-lg text-xl"></i>
    </button>
    <img id="lightbox-img" src="" alt="Zoomed" class="max-w-[90%] max-h-[85vh] object-contain rounded-lg shadow-2xl scale-95 transition-transform duration-300">
    <p id="lightbox-caption" class="text-white mt-5 text-lg font-bold tracking-wide text-center px-4"></p>
  </div>
@endsection

@section('js')
  {{-- Script Penanganan Lightbox[cite: 5] --}}
  <script>
    function openLightbox(imageSrc, caption) {
      const lightbox = document.getElementById('gallery-lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      const lightboxCaption = document.getElementById('lightbox-caption');

      lightboxImg.src = imageSrc;
      lightboxCaption.innerText = caption;

      lightbox.classList.remove('hidden');
      lightbox.classList.add('flex');

      setTimeout(() => {
        lightbox.classList.remove('opacity-0');
        lightboxImg.classList.remove('scale-95');
        lightboxImg.classList.add('scale-100');
      }, 10);
    }

    function closeLightbox() {
      const lightbox = document.getElementById('gallery-lightbox');
      const lightboxImg = document.getElementById('lightbox-img');

      lightbox.classList.add('opacity-0');
      lightboxImg.classList.remove('scale-100');
      lightboxImg.classList.add('scale-95');

      setTimeout(() => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        lightboxImg.src = '';
      }, 300);
    }
  </script>
@endsection
