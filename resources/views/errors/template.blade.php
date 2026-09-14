{{-- Dipakai bersama oleh 404, 403, 500, 503 --}}
<section class="relative -mt-32 pt-48 pb-24 lg:pt-64 lg:pb-32 bg-gray-50 overflow-hidden min-h-screen flex items-center">

  {{-- Dekorasi Blob — konsisten dengan hero halaman utama --}}
  <div class="absolute top-0 right-0 -mr-20 -mt-20 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob"></div>
  <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob animation-delay-2000"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="max-w-2xl mx-auto text-center" data-aos="fade-up">

      {{-- Kode Error Besar --}}
      <h1 class="text-[7rem] md:text-[10rem] font-black leading-none mb-2 text-transparent bg-clip-text bg-linear-to-br from-primary to-cyan-400">
        {{ $code }}
      </h1>

      {{-- Ikon Bulat --}}
      <div class="w-20 h-20 mx-auto -mt-6 mb-8 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-3xl text-primary">
        <i class="{{ $icon }}"></i>
      </div>

      {{-- Judul & Deskripsi --}}
      <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-primary text-sm font-semibold mb-4">
        {{ $badge }}
      </span>
      <h2 class="text-2xl md:text-3xl font-extrabold text-header mb-4 leading-tight">
        {{ $title }}
      </h2>
      <p class="text-gray-500 text-lg leading-relaxed mb-10 max-w-lg mx-auto">
        {{ $message }}
      </p>

      {{-- Tombol Aksi --}}
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ url('/') }}"
          class="inline-flex justify-center items-center px-8 py-3.5 text-base font-semibold text-white bg-primary rounded-full hover:bg-accent transition-all shadow-lg hover:shadow-primary/30 transform hover:-translate-y-1">
          <i class="fa-solid fa-house mr-2"></i> Kembali ke Beranda
        </a>
        <a href="{{ route('kontak') }}"
          class="inline-flex justify-center items-center px-8 py-3.5 text-base font-semibold text-gray-700 bg-white border border-gray-200 rounded-full hover:bg-gray-50 transition-all hover:border-gray-300 shadow-sm">
          <i class="fa-solid fa-headset mr-2"></i> Hubungi Kami
        </a>
      </div>

    </div>
  </div>
</section>
