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

  {{-- ================= GALLERY SECTION ================= --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    {{-- Lebar container dimaksimalkan ke max-w-7xl agar 4 kolom memiliki ruang bernapas --}}
    <div class="container mx-auto px-4 max-w-7xl">

      {{-- Filter Kategori --}}
      <div class="flex flex-wrap justify-center gap-3 mb-14" data-aos="fade-up">
        {{-- Tombol "Semua" --}}
        <a href="{{ route('galeri') }}"
          class="px-6 py-2.5 rounded-full text-sm font-bold shadow-sm transition-all hover:-translate-y-1
           {{ empty($kategoriAktif) ? 'bg-primary text-white shadow-primary/30' : 'bg-white text-gray-600 border border-gray-200 hover:bg-blue-50 hover:text-primary hover:border-blue-200' }}">
          Semua
        </a>
        {{-- Loop untuk tombol kategori lainnya --}}
        @foreach (['Kegiatan', 'Fasilitas', 'Prestasi', 'Ekstrakurikuler'] as $kat)
          <a href="{{ route('galeri', ['kategori' => $kat]) }}"
            class="px-6 py-2.5 rounded-full text-sm font-bold shadow-sm transition-all hover:-translate-y-1
             {{ $kategoriAktif == $kat ? 'bg-primary text-white shadow-primary/30' : 'bg-white text-gray-600 border border-gray-200 hover:bg-blue-50 hover:text-primary hover:border-blue-200' }}">
            {{ $kat }}
          </a>
        @endforeach
      </div>

      {{-- Photo Grid --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100">

        @forelse ($galeri as $item)
          {{-- Item Galeri --}}
          <div class="group relative h-60 bg-gray-200 rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-blue-900/10 transition-all duration-500">

            {{-- Gambar Utama (Efek Grayscale & Zoom Sedikit) --}}
            <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="{{ $item->judul }}"
              class="w-full h-full object-cover transition-all duration-700 ease-in-out group-hover:scale-105 group-hover:grayscale">

            {{-- Overlay Gelap Permanen (Diberi pointer-events-none agar tidak menghalangi klik) --}}
            <div class="absolute inset-0 bg-linear-to-t from-slate-900/90 via-slate-900/40 to-transparent pointer-events-none"></div>

            {{-- KATEGORI (Kiri Atas, Muncul saat Hover) --}}
            <div
              class="absolute top-4 left-4 bg-white/20 backdrop-blur-md border border-white/30 rounded-full px-3 py-1.5 flex items-center justify-center text-primary opacity-0 group-hover:opacity-100 scale-50 group-hover:scale-100 transition-all duration-500 z-10">
              <span class="text-[10px] font-bold uppercase tracking-widest">{{ $item->kategori }}</span>
            </div>

            {{-- TOMBOL PERBESAR (Kanan Atas, Muncul saat Hover) --}}
            <button type="button" onclick="openLightbox('{{ Storage::url('berita/' . $item->gambar) }}', '{{ $item->judul }}')"
              class="absolute top-4 right-4 w-9 h-9 bg-primary backdrop-blur-md border border-primary rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 scale-50 group-hover:scale-100 transition-all duration-500 z-10 hover:bg-white/20 hover:border-white/30 hover:text-primary cursor-pointer">
              <i class="bi bi-arrows-angle-expand text-sm font-bold"></i>
            </button>

            {{-- Konten Text Bawah (Judul & Deskripsi) --}}
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
          <div class="col-span-full py-24 flex flex-col items-center justify-center text-center px-4">

            {{-- Ikon Ilustrasi dengan Efek Glowing Lembut --}}
            <div class="relative w-28 h-28 flex items-center justify-center bg-gray-50 rounded-full mb-8 shadow-inner border border-gray-100">
              <div class="absolute inset-0 bg-blue-100 rounded-full blur-xl opacity-60"></div>

              {{-- Ganti ikon otomatis jika sedang menggunakan filter kategori --}}
              @if ($kategoriAktif)
                <i class="bi bi-search text-5xl text-primary relative z-10 opacity-80"></i>
              @else
                <i class="bi bi-images text-5xl text-primary relative z-10 opacity-80"></i>
              @endif
            </div>

            {{-- Pesan Berdasarkan Konteks (Filter Kategori vs Kosong Total) --}}
            @if ($kategoriAktif)
              <h3 class="text-2xl font-black text-accent mb-3">Foto Tidak Ditemukan</h3>
              <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                Maaf, saat ini belum ada dokumentasi atau foto yang diunggah untuk kategori <span class="font-bold text-primary">"{{ $kategoriAktif }}"</span>. Silakan jelajahi kategori lainnya.
              </p>

              {{-- Tombol Reset Filter --}}
              <a href="{{ route('galeri') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-full shadow-lg shadow-primary/30 hover:bg-accent transition-all hover:-translate-y-1">
                <i class="bi bi-grid-fill"></i> Tampilkan Semua Foto
              </a>
            @else
              <h3 class="text-2xl font-black text-accent mb-3">Belum Ada Dokumentasi</h3>
              <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed text-sm md:text-base">
                Saat ini belum ada album atau foto yang dipublikasikan di galeri. Nantikan dokumentasi kegiatan dan momen menarik selanjutnya.
              </p>

              {{-- Tombol Kembali --}}
              <a href="/"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 text-gray-600 font-bold rounded-full shadow-sm hover:bg-gray-50 hover:text-primary transition-all hover:-translate-y-1">
                <i class="bi bi-house-door"></i> Kembali ke Beranda
              </a>
            @endif

          </div>
        @endforelse

      </div>

      {{-- PAGINATION --}}
      <div class="mt-20 flex justify-center">
        {{-- Menggunakan link paginasi bawaan Laravel dengan custom view atau default tailwind --}}
        {{ $galeri->links('pagination::tailwind') }}
      </div>

    </div>
  </section>

  {{-- Wadah Modal Lightbox (Tersembunyi secara default) --}}
  <div id="gallery-lightbox" class="fixed inset-0 z-9999 bg-black/95 flex-col items-center justify-center hidden opacity-0 transition-opacity duration-300 backdrop-blur-sm">

    {{-- Tombol Close (Silang) --}}
    <button type="button" onclick="closeLightbox()"
      class="absolute top-6 right-6 w-12 h-12 flex items-center justify-center bg-white/10 hover:bg-red-500 text-white rounded-full transition-colors duration-300">
      <i class="bi bi-x-lg text-xl"></i>
    </button>

    {{-- Gambar yang Diperbesar --}}
    <img id="lightbox-img" src="" alt="Zoomed" class="max-w-[90%] max-h-[85vh] object-contain rounded-lg shadow-2xl scale-95 transition-transform duration-300">

    {{-- Judul Gambar --}}
    <p id="lightbox-caption" class="text-white mt-5 text-lg font-bold tracking-wide text-center px-4"></p>
  </div>
@endsection

@section('js')
  <script>
    // Fungsi untuk membuka pop-up gambar
    function openLightbox(imageSrc, caption) {
      const lightbox = document.getElementById('gallery-lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      const lightboxCaption = document.getElementById('lightbox-caption');

      // Masukkan data gambar ke dalam lightbox
      lightboxImg.src = imageSrc;
      lightboxCaption.innerText = caption;

      // Hapus class 'hidden' agar elemen dirender, lalu ubah opacity agar transisi halusnya jalan
      lightbox.classList.remove('hidden');
      lightbox.classList.add('flex');

      // Sedikit jeda agar browser memproses penghapusan 'hidden' sebelum animasi opacity
      setTimeout(() => {
        lightbox.classList.remove('opacity-0');
        lightboxImg.classList.remove('scale-95');
        lightboxImg.classList.add('scale-100');
      }, 10);
    }

    // Fungsi untuk menutup pop-up
    function closeLightbox() {
      const lightbox = document.getElementById('gallery-lightbox');
      const lightboxImg = document.getElementById('lightbox-img');

      // Kembalikan ke state awal (transparan dan mengecil)
      lightbox.classList.add('opacity-0');
      lightboxImg.classList.remove('scale-100');
      lightboxImg.classList.add('scale-95');

      // Setelah animasi selesai (300ms), sembunyikan sepenuhnya dari layar
      setTimeout(() => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        lightboxImg.src = ''; // Bersihkan src memori
      }, 300);
    }
  </script>
@endsection
