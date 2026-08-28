{{-- SECTION PARTNERS --}}
<section id="partners" class="py-16 bg-linear-to-br from-accent via-primary to-cyan-600 relative overflow-hidden">
  <div
    class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMTAiIGN5PSIxMCIgcj0iMiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==')]">
  </div>
  <div class="container mx-auto px-4 relative z-10">
    {{-- Header: Teks Putih --}}
    <div class="text-center mb-10">
      <h2 class="text-3xl font-extrabold text-white mb-2">Mitra Industri Kami</h2>
      <p class="text-blue-100 max-w-xl mx-auto">
        Bekerjasama dengan perusahaan terkemuka untuk menyalurkan lulusan yang kompeten.
      </p>
    </div>

    {{-- Slider Container --}}
    <div class="relative w-full overflow-hidden group">
      {{-- Track --}}
      <div class="flex w-max animate-infinite-scroll pause-on-hover py-4">
        <div class="flex gap-6 mx-3">
          @for ($i = 1; $i <= 18; $i++)
            <div class="w-45 h-22.5 flex items-center justify-center bg-white rounded-xl hover:scale-105 transition-all duration-300 
            cursor-pointer shadow-lg group/item">
              <img src="{{ asset('assets/senop/img/partners/' . $i . '.webp') }}" class="max-w-[70%] max-h-12.5 object-contain transition-all duration-300" alt="Partner {{ $i }}">
            </div>
          @endfor
        </div>
        <div class="flex gap-6 mx-3">
          @for ($i = 1; $i <= 18; $i++)
            <div class="w-45 h-22.5 flex items-center justify-center bg-white rounded-xl hover:scale-105 transition-all duration-300 
            cursor-pointer shadow-lg group/item">
              <img src="{{ asset('assets/senop/img/partners/' . $i . '.webp') }}" class="max-w-[70%] max-h-12.5 object-contain transition-all duration-300" alt="Partner {{ $i }}">
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>

{{-- FOOTER --}}
<footer class="relative bg-gray-50 pt-12 pb-18 overflow-hidden">

  {{-- background shapes (BLOBS) - Sama seperti Hero Section --}}
  {{-- Blob 1: Biru Pudar (Kanan Atas) --}}
  <div class="absolute top-0 right-0 -mr-40 -mt-40 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob pointer-events-none"></div>
  {{-- Blob 2: Ungu Pudar (Kiri Bawah) --}}
  <div class="absolute bottom-0 left-0 -ml-40 -mb-40 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000 pointer-events-none"></div>

  <div class="container mx-auto px-4 relative z-10">

    {{-- MAIN FOOTER CONTENT --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-10">

      {{-- Kolom 1: Info Sekolah & Logo (4 Kolom) --}}
      <div class="lg:col-span-4 flex flex-col">
        <a href="/" class="mb-6 inline-block">
          <img src="{{ asset('assets/senop/img/logo/icon.webp') }}" alt="Logo SMK Senopati" class="h-20 w-auto" loading="lazy">
        </a>
        <p class="text-gray-600 mb-8 leading-relaxed">
          Mencetak generasi unggul, mandiri, dan berkompeten di era digital. Bergabunglah menjadi bagian dari keluarga besar kami.
        </p>

        {{-- Sosial Media dengan Style Ikon Bulat --}}
        <div class="flex items-center gap-4">
          <a href="https://www.facebook.com/esemka.senopati.9"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-primary shadow-sm hover:bg-primary hover:text-white transition-all hover:-translate-y-1"><i
              class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/smk_senopati/"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-pink-600 shadow-sm hover:bg-pink-600 hover:text-white transition-all hover:-translate-y-1"><i
              class="bi bi-instagram"></i></a>
          <a href="https://tiktok.com/@smk_senopati/"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-sm hover:bg-black hover:text-white transition-all hover:-translate-y-1"><i
              class="bi bi-tiktok"></i></a>
          <a href="https://www.youtube.com/@smksenopatisedati"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-red-600 shadow-sm hover:bg-red-600 hover:text-white transition-all hover:-translate-y-1"><i
              class="bi bi-youtube"></i></a>
        </div>
      </div>

      {{-- Kolom 2: Navigasi Link (8 Kolom - Dibagi 3) --}}
      <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-8">

        {{-- Menu Utama --}}
        <div>
          <h4 class="font-bold text-header text-lg mb-6">Menu Utama</h4>
          <ul class="space-y-4">
            <li><a href="/" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Beranda</a></li>
            <li><a href="{{ route('profil') }}" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Identitas Sekolah</a></li>
            <li><a href="{{ route('visi-misi') }}" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Visi & Misi</a></li>
            <li><a href="/" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> PPDB</a></li>
          </ul>
        </div>

        {{-- Program --}}
        <div>
          <h4 class="font-bold text-header text-lg mb-6">Program</h4>
          <ul class="space-y-4">
            <li><a href="{{ route('berita') }}" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Berita</a></li>
            <li><a href="{{ route('agenda') }}" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Agenda</a></li>
            <li><a href="{{ route('galeri') }}" class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Galeri</a></li>
            <li><a href="https://virtualsekolah.id/tour/viewer/index.php?code=c9f0f895fb98ab9159f51fd0297e236d" target="_blank"
                class="text-gray-600 hover:text-primary transition-colors inline-flex items-center gap-2 group"><span
                  class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-primary transition-colors"></span> Virtual Tour</a></li>
          </ul>
        </div>

        {{-- Kontak --}}
        <div>
          <h4 class="font-bold text-header text-lg mb-6">Hubungi Kami</h4>
          <ul class="space-y-5">
            <li class="flex gap-3">
              <div class="w-10 h-10 rounded-full bg-blue-50 text-primary flex items-center justify-center shrink-0">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <span class="text-gray-600 text-sm leading-relaxed">Jl. Senopati No.2, Betro, Kec. Sedati, Kab. Sidoarjo</span>
            </li>
            <li>
              <a href="tel:0318915186" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-green-50 text-green-600 flex items-center justify-center shrink-0 group-hover:bg-green-600 group-hover:text-white transition-colors">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <span class="text-gray-600 group-hover:text-green-600 transition-colors">031-8915186</span>
              </a>
            </li>
            <li>
              <a href="mailto:smk.senopati@gmail.com" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-red-50 text-red-600 flex items-center justify-center shrink-0 group-hover:bg-red-600 group-hover:text-white transition-colors">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <span class="text-gray-600 group-hover:text-red-600 transition-colors">smk.senopati@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="border-t border-gray-200 pt-4 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
      <p class="text-center md:text-left mb-4 md:mb-0">
        &copy; 2025 <strong class="text-primary">SMK Senopati</strong>. All rights reserved.
      </p>
      <div class="flex items-center gap-6">
        <p>Crafted by <a href="javascript:void(0)" class="text-primary hover:underline font-bold">PPA</a> with <i class="bi bi-heart-fill text-red-600"></i></p>
      </div>
    </div>
  </div>
</footer>
