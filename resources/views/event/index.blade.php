@extends('layouts.main')

@section('title')
  <title>Agenda</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Agenda</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Agenda SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Temukan informasi agenda kegiatan di SMK Senopati.
      </p>

    </div>
  </section>

  {{-- ================= AGENDA LIST SECTION ================= --}}
  <section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 max-w-6xl">

      {{-- Grid 2 Kolom untuk Daftar Agenda --}}
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

        @forelse ($agenda as $item)
          <div
            class="group relative bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-blue-900/5 hover:-translate-y-1 transition-all duration-300 flex flex-col h-full overflow-hidden">

            {{-- HEADER KARTU (Sama seperti sebelumnya) --}}
            <div class="flex gap-5 items-start mb-5">
              <div class="shrink-0 w-16 h-16 bg-blue-50/50 rounded-2xl flex flex-col items-center justify-center border border-blue-100/50 group-hover:bg-primary transition-colors duration-300">
                <span class="text-xl font-black text-primary group-hover:text-white leading-none">
                  {{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}
                </span>
                <span class="text-[10px] font-bold text-accent group-hover:text-blue-100 uppercase tracking-widest mt-1">
                  {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('M') }}
                </span>
              </div>
              <div class="flex flex-col gap-2 pt-1">
                <span class="text-gray-500 text-xs font-medium flex items-center gap-1.5">
                  <i class="bi bi-calendar-event text-primary/70"></i>
                  {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}
                </span>
                <span class="px-3 py-1 bg-slate-50 text-slate-600 rounded-full text-[10px] font-bold uppercase tracking-widest w-max border border-slate-100 flex items-center gap-1.5">
                  <i class="bi bi-geo-alt-fill text-gray-400"></i> {{ Str::limit($item->tempat, 25) }}
                </span>
              </div>
            </div>

            {{-- KONTEN TEKS --}}
            <div class="grow flex flex-col">
              <h3 class="text-lg font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                {{ $item->judul }}
              </h3>
              <p class="text-gray-500 text-sm leading-relaxed line-clamp-2 mb-6">
                {{ Str::limit(strip_tags($item->deskripsi), 120) }}
              </p>
            </div>

            {{-- FOOTER KARTU --}}
            <div class="mt-auto pt-4 border-t border-gray-50 flex justify-between items-center relative z-20">
              <span class="text-xs font-bold text-primary group-hover:text-blue-700 transition-colors">Lihat Detail Agenda</span>
              <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:bg-blue-50 group-hover:text-primary transition-colors">
                <i class="bi bi-arrow-right"></i>
              </div>
            </div>

            {{-- TOMBOL OVERLAY (Memicu Modal) --}}
            <button type="button" onclick="openAgendaModal('agenda-data-{{ $item->id }}')" class="absolute inset-0 z-10 w-full h-full cursor-pointer focus:outline-none"
              aria-label="Lihat detail {{ $item->judul }}"></button>

            {{-- DATA TERSEMBUNYI UNTUK MODAL --}}
            <div id="agenda-data-{{ $item->id }}" class="hidden">
              <div class="data-title">{{ $item->judul }}</div>
              <div class="data-date">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</div>
              <div class="data-place">{{ $item->tempat }}</div>
              {{-- Gunakan {!! !!} agar tag HTML dari Purifier tereksekusi dengan benar --}}
              <div class="data-desc">{!! $item->deskripsi !!}</div>
            </div>

          </div>
        @empty
          {{-- Tampilan Kosong (Empty State) membentang penuh --}}
          <div class="col-span-full bg-white rounded-4xl p-12 text-center shadow-sm border border-gray-100 flex flex-col items-center justify-center">
            <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-6 border border-gray-100">
              <i class="bi bi-calendar-x text-4xl text-gray-300 block"></i>
            </div>
            <h3 class="text-2xl font-black text-gray-800 mb-2">Belum Ada Agenda</h3>
            <p class="text-gray-500 max-w-sm mx-auto">Saat ini belum ada agenda kegiatan yang dijadwalkan di sistem. Silakan kembali lagi nanti.</p>
          </div>
        @endforelse

      </div>

      {{-- PAGINATION --}}
      <div class="mt-16 flex justify-center relative z-20">
        {{ $agenda->links('pagination::tailwind') }}
      </div>

    </div>
  </section>

  {{-- ================= WADAH MODAL AGENDA ================= --}}
  <div id="agenda-modal" class="fixed inset-0 z-9999 bg-slate-900/60 flex items-center justify-center hidden opacity-0 transition-opacity duration-300 backdrop-blur-sm p-4 md:p-6"
    onclick="closeAgendaModal()">

    {{-- Konten Modal (Diberi onclick stopPropagation agar tidak menutup saat kotak putih diklik) --}}
    <div class="bg-white rounded-3xl w-full max-w-2xl max-h-[90vh] flex flex-col shadow-2xl transform scale-95 transition-transform duration-300" id="agenda-modal-content"
      onclick="event.stopPropagation()">

      {{-- Header Modal --}}
      <div class="px-6 py-4 md:px-8 md:py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50/50 rounded-t-3xl">
        <h4 class="font-bold text-gray-500 uppercase tracking-widest text-xs">Informasi Agenda</h4>
        <button type="button" onclick="closeAgendaModal()"
          class="w-8 h-8 flex items-center justify-center rounded-full bg-white border border-gray-200 text-gray-500 hover:bg-red-50 hover:text-red-500 hover:border-red-200 transition-all shadow-sm">
          <i class="bi bi-x-lg text-sm"></i>
        </button>
      </div>

      {{-- Body Modal (Area yang bisa di-scroll) --}}
      <div class="p-6 md:p-8 overflow-y-auto" style="scrollbar-width: thin;">

        <h2 id="modal-judul" class="text-2xl md:text-3xl font-black text-gray-800 mb-6 leading-tight"></h2>

        {{-- Meta Tag Info --}}
        <div class="flex flex-col sm:flex-row gap-3 mb-8">
          <div class="flex items-center gap-2 text-sm font-semibold text-primary bg-blue-50 px-4 py-2 rounded-xl border border-blue-100/50 w-fit">
            <i class="bi bi-calendar-event text-lg"></i>
            <span id="modal-tanggal"></span>
          </div>
          <div class="flex items-center gap-2 text-sm font-semibold text-gray-600 bg-gray-50 px-4 py-2 rounded-xl border border-gray-200 w-fit">
            <i class="bi bi-geo-alt-fill text-red-400 text-lg"></i>
            <span id="modal-tempat"></span>
          </div>
        </div>

        {{-- Garis Pemisah --}}
        <hr class="border-gray-100 mb-6">

        {{-- Isi Konten Deskripsi Lengkap --}}
        <div id="modal-deskripsi" class="text-gray-600 leading-relaxed text-sm md:text-base space-y-4">
          {{-- Konten Summernote/Purifier akan di-render di sini --}}
        </div>

      </div>

    </div>
  </div>
@endsection

@section('js')
  <script>
    function openAgendaModal(dataId) {
      const dataContainer = document.getElementById(dataId);
      if (!dataContainer) return;

      // 1. Ambil data dari elemen HTML yang disembunyikan
      const title = dataContainer.querySelector('.data-title').innerHTML;
      const date = dataContainer.querySelector('.data-date').innerHTML;
      const place = dataContainer.querySelector('.data-place').innerHTML;
      const desc = dataContainer.querySelector('.data-desc').innerHTML;

      // 2. Suntikkan data tersebut ke dalam Modal
      document.getElementById('modal-judul').innerHTML = title;
      document.getElementById('modal-tanggal').innerHTML = date;
      document.getElementById('modal-tempat').innerHTML = place;
      document.getElementById('modal-deskripsi').innerHTML = desc;

      // 3. Animasi Membuka Modal
      const modal = document.getElementById('agenda-modal');
      const modalContent = document.getElementById('agenda-modal-content');

      // Hapus class 'hidden' untuk merender DOM
      modal.classList.remove('hidden');

      // Terapkan efek transisi (fade in & zoom in)
      setTimeout(() => {
        modal.classList.remove('opacity-0');
        modalContent.classList.remove('scale-95');
        modalContent.classList.add('scale-100');
      }, 10);

      // Matikan scroll di layar utama saat modal terbuka
      document.body.style.overflow = 'hidden';
    }

    function closeAgendaModal() {
      const modal = document.getElementById('agenda-modal');
      const modalContent = document.getElementById('agenda-modal-content');

      // Animasi Menutup Modal (fade out & zoom out)
      modal.classList.add('opacity-0');
      modalContent.classList.remove('scale-100');
      modalContent.classList.add('scale-95');

      // Tunggu animasi selesai baru sembunyikan sepenuhnya
      setTimeout(() => {
        modal.classList.add('hidden');

        // Kembalikan fungsi scroll layar utama
        document.body.style.overflow = 'auto';

        // Bersihkan isi modal
        document.getElementById('modal-deskripsi').innerHTML = '';
      }, 300);
    }
  </script>
@endsection
