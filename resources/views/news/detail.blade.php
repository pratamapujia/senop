@extends('layouts.main')

@section('title')
  <title>Detail Berita</title>
@endsection

@section('main')
  {{-- HERO SECTION (Custom Title) --}}
  <section class="relative -mt-32 pt-48 pb-32 lg:pt-60 lg:pb-40 bg-[#0f172a] overflow-hidden">

    {{-- Background Gradient --}}
    <div class="absolute inset-0 bg-linear-to-br from-blue-900 via-slate-900 to-indigo-900"></div>

    {{-- Animated Blobs --}}
    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500 rounded-full mix-blend-screen filter blur-[100px] opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    {{-- Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); 
                background-size: 40px 40px;">
    </div>

    {{-- Gradient Fade Bottom (Transisi ke Gray-50) --}}
    <div class="absolute bottom-0 left-0 w-full h-32 bg-linear-to-t from-gray-50 to-transparent"></div>

    {{-- KONTEN HERO --}}
    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">

      {{-- Breadcrumb --}}
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Beranda</a>
        <span class="text-gray-500 text-xs">/</span>
        <a href="{{ route('berita') }}" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Berita</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Detail</span>
      </div>

      {{-- Judul Berita Dinamis --}}
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-white mb-6 tracking-tight leading-tight max-w-5xl mx-auto">
        {{ $berita->judul }}
      </h1>

      {{-- Meta Data --}}
      <div class="flex flex-wrap justify-center gap-4 md:gap-8 text-blue-100 text-sm font-medium">
        <span class="flex items-center gap-2">
          <i class="bi bi-calendar3 text-cyan-400"></i>
          {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
        </span>
        <span class="flex items-center gap-2">
          <i class="bi bi-person-circle text-cyan-400"></i>
          {{ $berita->author->name }}
        </span>
        <span class="flex items-center gap-2">
          <i class="bi bi-tag-fill text-cyan-400"></i>
          {{ $berita->kategori }}
        </span>
      </div>

    </div>
  </section>

  {{-- Detail Berita --}}
  <section class="relative bg-white -mt-10 lg:-mt-20 pb-20 rounded-t-[3rem] z-20">
    <div class="container mx-auto px-4">

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

        {{-- KOLOM TENGAH: KONTEN (Lebar 8) --}}
        <div class="lg:col-span-8 lg:col-start-3">

          {{-- Featured Image --}}
          <div class="rounded-3xl overflow-hidden shadow-2xl mb-10 border-4 border-white relative z-20">
            <img src="{{ Storage::url('berita/' . $berita->gambar) }}" alt="{{ $berita->slug }}" class="w-full h-auto object-cover">
          </div>

          {{-- Body Text --}}
          <div class="prose prose-lg prose-blue max-w-none text-gray-600 leading-loose">
            {{-- Gunakan {!! !!} untuk render HTML dari summernote/editor --}}
            {!! $berita->konten !!}
          </div>

          {{-- Share Buttons --}}
          <div class="border-t border-b border-gray-100 py-8 my-10 flex flex-col md:flex-row items-center justify-between gap-4">
            <span class="font-bold text-primary">Bagikan artikel ini:</span>
            <div class="flex gap-3">

              {{-- Tombol WhatsApp --}}
              {{-- urlencode() digunakan agar spasi dan karakter khusus aman dikirim via URL --}}
              <a href="https://api.whatsapp.com/send?text={{ urlencode($berita->judul . ' | Baca selengkapnya di: ' . request()->url()) }}" target="_blank"
                class="w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center hover:bg-green-600 transition-colors" title="Bagikan ke WhatsApp">
                <i class="bi bi-whatsapp"></i>
              </a>

              {{-- Tombol Copy Link --}}
              <button type="button" onclick="copyLink('{{ request()->url() }}')"
                class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center hover:bg-gray-300 transition-colors" title="Salin Tautan" style="cursor: pointer;">
                <i class="bi bi-link-45deg text-xl"></i>
              </button>

            </div>
          </div>

          {{-- Navigasi Next/Prev --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- KOTAK SEBELUMNYA --}}
            @if ($prevBerita)
              <a href="{{ route('detail-berita', $prevBerita->slug) }}" class="group block p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-blue-200 transition-all">
                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-2 block">Sebelumnya</span>
                <h5 class="font-bold text-primary group-hover:text-gray-600 transition-colors line-clamp-1">{{ $prevBerita->judul }}</h5>
              </a>
            @else
              {{-- Tampilan Disabled Jika Mentok di Awal --}}
              <div class="block p-6 bg-gray-50/50 rounded-2xl border border-gray-100 opacity-60 cursor-not-allowed">
                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-2 block">Sebelumnya</span>
                <h5 class="font-bold text-gray-400 italic">Ini adalah berita pertama</h5>
              </div>
            @endif


            {{-- KOTAK SELANJUTNYA --}}
            @if ($nextBerita)
              <a href="{{ route('detail-berita', $nextBerita->slug) }}" class="group block p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-blue-200 transition-all text-right">
                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-2 block">Selanjutnya</span>
                <h5 class="font-bold text-primary group-hover:text-gray-600 transition-colors line-clamp-1">{{ $nextBerita->judul }}</h5>
              </a>
            @else
              {{-- Tampilan Disabled Jika Mentok di Akhir --}}
              <div class="block p-6 bg-gray-50/50 rounded-2xl border border-gray-100 opacity-60 cursor-not-allowed text-right">
                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-2 block">Selanjutnya</span>
                <h5 class="font-bold text-gray-400 italic">Anda berada di berita terbaru</h5>
              </div>
            @endif

          </div>

        </div>

      </div>
    </div>
  </section>

  {{-- Custom Toast Notification (Tautan Disalin) --}}
  <div id="copy-toast"
    class="fixed bottom-10 left-1/2 -translate-x-1/2 z-9999 bg-gray-900 text-white px-5 py-3 rounded-full shadow-2xl flex items-center gap-3 transition-all duration-500 opacity-0 invisible translate-y-5 pointer-events-none">
    <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center shrink-0">
      <i class="bi bi-check2 text-white font-bold"></i>
    </div>
    <span class="font-medium text-sm tracking-wide">Tautan berhasil disalin!</span>
  </div>

  {{-- Custom Toast Notification (Tautan Gagal Disalin) --}}
  <div id="error-toast"
    class="fixed bottom-10 left-1/2 -translate-x-1/2 z-9999 bg-gray-900 text-white px-5 py-3 rounded-full shadow-2xl flex items-center gap-3 transition-all duration-500 opacity-0 invisible translate-y-5 pointer-events-none">
    <div class="w-6 h-6 rounded-full bg-red-500 flex items-center justify-center shrink-0">
      <i class="bi bi-x-lg text-white font-bold" style="font-size: 0.8rem;"></i>
    </div>
    <span class="font-medium text-sm tracking-wide">Gagal menyalin tautan!</span>
  </div>
@endsection

@section('js')
  <script>
    function copyLink(url) {
      navigator.clipboard.writeText(url).then(function() {
        // Menangani jika BERHASIL disalin
        const toast = document.getElementById('copy-toast');

        toast.classList.remove('opacity-0', 'invisible', 'translate-y-5');
        toast.classList.add('opacity-100', 'visible', 'translate-y-0');

        setTimeout(() => {
          toast.classList.remove('opacity-100', 'visible', 'translate-y-0');
          toast.classList.add('opacity-0', 'invisible', 'translate-y-5');
        }, 3000);

      }).catch(function(err) {
        console.error('Gagal menyalin tautan: ', err);

        // Menangani jika GAGAL disalin
        const errorToast = document.getElementById('error-toast');

        errorToast.classList.remove('opacity-0', 'invisible', 'translate-y-5');
        errorToast.classList.add('opacity-100', 'visible', 'translate-y-0');

        setTimeout(() => {
          errorToast.classList.remove('opacity-100', 'visible', 'translate-y-0');
          errorToast.classList.add('opacity-0', 'invisible', 'translate-y-5');
        }, 3000);
      });
    }
  </script>
@endsection
