@extends('layouts.main')

@section('title')
  <title>SMK Senopati</title>
@endsection

@section('main')
  {{-- PRELOADER ANIMATION --}}
  <div id="preloader" class="fixed inset-0 z-9999 bg-gray-50 flex items-center justify-center transition-opacity duration-500">
    <div class="relative flex flex-col items-center">
      {{-- Animasi Logo Berdenyut --}}
      <img src="{{ asset('assets/senop/img/logo/icon.webp') }}" alt="Loading..." class="w-32 h-32 md:w-40 md:h-40 object-contain animate-pulse">

      {{-- Indikator Loading (3 Titik) --}}
      <div class="mt-6 flex gap-2">
        <div class="w-3 h-3 bg-primary rounded-full animate-bounce"></div>
        <div class="w-3 h-3 bg-primary rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
        <div class="w-3 h-3 bg-primary rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
      </div>

      {{-- Teks Opsional --}}
      <p class="mt-4 text-primary font-bold text-sm tracking-widest uppercase animate-pulse">Memuat Data...</p>
    </div>
  </div>

  <section id="hero" class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-gray-50 overflow-hidden">

    {{-- Container Utama --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

        {{-- KOLOM KIRI: Teks & CTA --}}
        <div class="order-2 lg:order-1 flex flex-col items-center lg:items-start text-center lg:text-left" data-aos="fade-up" data-aos-delay="100">

          {{-- Badge Kecil (Opsional: Pemanis) --}}
          <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-primary text-sm font-semibold mb-4">
            Sekolah Pusat Keunggulan
          </span>

          <h2 class="text-4xl lg:text-5xl font-extrabold text-header leading-tight mb-4">
            Selamat Datang di <br>
            <span class="text-primary">SMK Senopati Sedati</span>
          </h2>

          <p class="text-lg text-gray-600 mb-8 max-w-lg leading-relaxed">
            SMK Senopati mempersiapkan generasi muda dengan <span class="font-semibold text-header underline">Kompetensi</span>, <span class="font-semibold text-header underline">Pengalaman</span>, dan
            <span class="font-semibold text-header underline">Karakter</span> untuk menghadapi tantangan global.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
            <a href="/"
              class="inline-flex justify-center items-center px-8 py-3.5 text-base font-semibold text-white bg-primary rounded-full hover:bg-accent transition-all shadow-lg hover:shadow-secondary0/30 transform hover:-translate-y-1">
              Info SPMB
              <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>

            {{-- Tombol Sekunder (Opsional: Misal Video Profil) --}}
            <a href="{{ route('visi-misi') }}"
              class="inline-flex justify-center items-center px-8 py-3.5 text-base font-semibold text-gray-700 bg-white border border-gray-200 rounded-full hover:bg-gray-50 transition-all hover:border-gray-300 shadow-sm">
              Visi & Misi
            </a>
          </div>
        </div>

        {{-- KOLOM KANAN: Gambar & Shape --}}
        <div class="order-1 lg:order-2 relative" data-aos="zoom-out" data-aos-delay="200">

          {{-- DEKORASI SHAPE (Background Blobs) --}}
          {{-- Shape 1: Biru Pudar --}}
          <div class="absolute top-0 right-0 -mr-20 -mt-20 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob"></div>
          {{-- Shape 2: Ungu/Pink Pudar --}}
          <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob animation-delay-2000"></div>
          {{-- Shape 3: Kuning Pudar (Kecil) --}}
          <div class="absolute -bottom-8 right-20 w-48 h-48 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"></div>

          {{-- Gambar Utama --}}
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white transform rotate-2 hover:rotate-0 transition-transform duration-500">
            <img src="{{ asset('assets/senop/img/hero.webp') }}" alt="Siswa SMK Senopati" class="w-full h-auto object-cover" loading="lazy">
          </div>

          {{-- Elemen Dekorasi Melayang (Floating Card) - Opsional --}}
          <div
            class="absolute -bottom-4 left-4 md:-bottom-6 md:-left-6 bg-white px-3 py-2.5 rounded-lg shadow-lg md:p-4 md:rounded-xl md:shadow-xl border border-gray-100 flex items-center gap-3 animate-bounce-slow">
            {{-- Wadah Ikon dengan Animasi Detak (Ping) --}}
            <div class="relative flex items-center justify-center h-5 w-5 md:h-10 md:w-10 shrink-0">
              {{-- Lingkaran Gelombang Animasi (Di Belakang) --}}
              <span class="absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-75 animate-ping"></span>
              {{-- Lingkaran Ikon Utama (Di Depan) --}}
              <div class="relative inline-flex items-center justify-center h-full w-full bg-green-100 rounded-full text-green-600">
                <i class="bi bi-check-circle-fill text-xl"></i>
              </div>
            </div>
            <div>
              <p class="text-[10px] md:text-xs text-gray-500 font-semibold uppercase">Terakreditasi</p>
              <p class="text-xs md:text-sm font-bold text-header">Unggul (A)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- About Section --}}
  <section id="about" class="py-16 lg:py-24 bg-white overflow-hidden">

    {{-- Section Title --}}
    <div class="container mx-auto px-4 mb-16 text-center" data-aos="fade-up">
      <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-primary text-xs font-bold tracking-wider uppercase mb-3">
        Keunggulan Kami
      </span>
      <h2 class="text-3xl md:text-4xl font-extrabold text-header mb-4">
        Kenapa Harus
        <span class="text-transparent bg-clip-text bg-linear-to-r from-primary to-cyan-500">
          Senopati?
        </span>
      </h2>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Temukan alasan kuat mengapa SMK Senopati adalah tempat terbaik untuk masa depanmu.
      </p>
    </div>

    {{-- Cards Grid --}}
    <div class="container mx-auto px-4 mb-20">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

        {{-- ITEM 1: Fasilitas --}}
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="h-full bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-14 h-14 rounded-xl bg-secondary text-primary flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
              <i class="bi bi-door-open"></i>
            </div>
            <h4 class="text-xl font-bold text-header mb-3">Fasilitas Lengkap</h4>
            <p class="text-gray-500 text-sm leading-relaxed">SMK Senopati memiliki fasilitas yang lengkap untuk menunjang pembelajaran</p>
          </div>
        </div>

        {{-- ITEM 2: Lingkungan --}}
        <div data-aos="fade-up" data-aos-delay="200">
          <div class="h-full bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-14 h-14 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center text-2xl mb-6 group-hover:bg-yellow-500 group-hover:text-white transition-colors duration-300">
              <i class="bi bi-house-heart-fill"></i>
            </div>
            <h4 class="text-xl font-bold text-header mb-3">Lingkungan Nyaman</h4>
            <p class="text-gray-500 text-sm leading-relaxed">SMK Senopati memiliki lingkungan yang nyaman bagi peserta didik</p>
          </div>
        </div>

        {{-- ITEM 3: Pengajar --}}
        <div data-aos="fade-up" data-aos-delay="300">
          <div class="h-full bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-14 h-14 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl mb-6 group-hover:bg-red-600 group-hover:text-white transition-colors duration-300">
              <i class="bi bi-person-workspace"></i>
            </div>
            <h4 class="text-xl font-bold text-header mb-3">Pengajar Kompeten</h4>
            <p class="text-gray-500 text-sm leading-relaxed">SMK Senopati memiliki pengajar yang kompeten dan bersertifikasi</p>
          </div>
        </div>

        {{-- ITEM 4: Kerjasama --}}
        <div data-aos="fade-up" data-aos-delay="400">
          <div class="h-full bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
            <div class="w-14 h-14 rounded-xl bg-green-50 text-green-600 flex items-center justify-center text-2xl mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
              <i class="bi bi-diagram-3"></i>
            </div>
            <h4 class="text-xl font-bold text-header mb-3">Kerjasama Luas</h4>
            <p class="text-gray-500 text-sm leading-relaxed">SMK Senopati memiliki kerjasama yang luas dengan industri</p>
          </div>
        </div>

      </div>
    </div>

    <div class="container mx-auto px-4 max-w-7xl" data-aos="fade-up" data-aos-delay="100">

      {{-- Wadah Utama (Card) dengan Border Dashed Biru Transparan & Padding Lebih Lebar --}}
      <div class="bg-white rounded-[2.5rem] p-8 lg:p-16 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border-2 border-dashed border-primary/30 relative overflow-hidden">

        {{-- Watermark Kutipan di Latar Belakang --}}
        <i class="bi bi-quote absolute top-0 right-10 text-[15rem] text-gray-50 z-0 rotate-12"></i>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center relative z-10">

          {{-- Foto Kepsek (Proporsi 5 Kolom) --}}
          <div class="lg:col-span-5 relative" data-aos="fade-right" data-aos-delay="200">

            {{-- Efek Bayangan Kotak Bertumpuk --}}
            <div class="absolute inset-0 bg-linear-to-br from-blue-100 to-primary/20 rounded-4xl translate-x-5 translate-y-5 -z-10"></div>

            {{-- Pembungkus Foto --}}
            <div class="relative rounded-4xl overflow-hidden shadow-xl border-4 border-white group bg-gray-200">
              <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
              <img src="{{ asset('assets/senop/img/profile/kepsek.jpeg') }}" alt="Kepala Sekolah SMK Senopati"
                class="w-full object-cover aspect-4/5 group-hover:scale-110 transition-transform duration-700 ease-in-out" loading="lazy">
            </div>
          </div>

          {{-- Konten Sambutan (7 Kolom) --}}
          <div class="lg:col-span-7" data-aos="fade-left" data-aos-delay="300">

            {{-- Badge "Pesan Pimpinan" --}}
            <div class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-100 mb-8">
              <div class="relative flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
              </div>
              <span class="text-xs font-bold text-primary uppercase tracking-widest">Pesan Pimpinan</span>
            </div>

            {{-- Judul Utama --}}
            <h3 class="text-3xl font-black text-gray-800 mb-8 leading-tight">
              Sambutan <span class="text-transparent bg-clip-text bg-linear-to-r from-primary to-cyan-500">Kepala Sekolah</span>
            </h3>

            {{-- Konten Teks --}}
            <div class="text-gray-600 leading-relaxed text-lg text-justify md:text-left space-y-5">
              <p>
                Selamat datang di website resmi <span class="font-bold text-gray-800">SMK Senopati</span>. Sebagai institusi pendidikan vokasi terdepan, kami berkomitmen membentuk lulusan yang siap
                menghadapi dinamika dunia nyata melalui penguasaan keahlian mendalam, pembentukan karakter luhur, dan pengalaman langsung.
              </p>
              <p>
                Berlandaskan semangat <span class="font-bold text-primary">BMW (Bekerja, Melanjutkan, dan Wirausaha)</span>, kami senantiasa membimbing setiap peserta didik untuk tumbuh menjadi sumber
                daya manusia yang profesional dan berdaya saing.
              </p>
            </div>

            {{-- Penutup / Identitas Kepala Sekolah --}}
            <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
              <div class="flex items-center gap-5">

                {{-- Ikon Profil --}}
                <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center text-primary shadow-inner border border-blue-100/50">
                  <i class="fa-solid fa-user-tie text-2xl"></i>
                </div>

                <div class="flex flex-col">
                  <h4 class="text-lg font-black text-gray-800">
                    Fathoni, M.Pd.
                  </h4>
                  <span class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Kepala SMK Senopati</span>
                </div>
              </div>

              {{-- Ornamen Tambahan (Ikon Pena) --}}
              <div class="hidden sm:flex w-14 h-14 rounded-full bg-blue-50/50 items-center justify-center text-blue-200 border border-blue-100/30">
                <i class="bi bi-pen text-2xl"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Program Keahlian --}}
  <section id="program-keahlian" class="py-16 lg:py-24 bg-gray-50 overflow-hidden">

    {{-- Custom Style untuk Animasi Tab --}}
    <style>
      .tab-pane {
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
      }

      .tab-pane.active {
        display: block;
        opacity: 1;
      }
    </style>

    {{-- Header --}}
    <div class="container mx-auto px-4 text-center mb-12" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-extrabold text-header mb-2">Program Keahlian</h2>
      <div class="h-1.5 w-20 bg-linear-to-r from-primary to-cyan-400 mx-auto rounded-full mb-4"></div>
      <p class="text-gray-500 max-w-2xl mx-auto">Jelajahi program keahlian unggulan kami dan temukan minat bakatmu untuk meraih masa depan.</p>
    </div>

    <div class="container mx-auto px-4 max-w-6xl">

      {{-- Tab Navigation --}}
      <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">

        {{-- Tombol DKV (Aktif Default) --}}
        <button onclick="switchTab('tab-dkv')" id="btn-tab-dkv"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-primary text-white shadow-lg shadow-primary/30">
          <i class="bi bi-palette mr-1.5"></i> DKV
        </button>

        {{-- Tombol MP --}}
        <button onclick="switchTab('tab-mp')" id="btn-tab-mp"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-white text-gray-500 hover:bg-gray-100 shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]">
          <i class="bi bi-briefcase mr-1.5"></i> MP
        </button>

        {{-- Tombol RPL --}}
        <button onclick="switchTab('tab-rpl')" id="btn-tab-rpl"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-white text-gray-500 hover:bg-gray-100 shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]">
          <i class="bi bi-code-slash mr-1.5"></i> RPL
        </button>

        {{-- Tombol TKJ --}}
        <button onclick="switchTab('tab-tkj')" id="btn-tab-tkj"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-white text-gray-500 hover:bg-gray-100 shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]">
          <i class="bi bi-hdd-network mr-1.5"></i> TKJ
        </button>

        {{-- Tombol TKR --}}
        <button onclick="switchTab('tab-tkr')" id="btn-tab-tkr"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-white text-gray-500 hover:bg-gray-100 shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]">
          <i class="bi bi-car-front mr-1.5"></i> TKR
        </button>

        {{-- Tombol TSM --}}
        <button onclick="switchTab('tab-tsm')" id="btn-tab-tsm"
          class="tab-btn cursor-pointer px-5 md:px-6 py-2.5 md:py-3 rounded-full font-bold text-sm md:text-base transition-all duration-300 bg-white text-gray-500 hover:bg-gray-100 shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]">
          <i class="bi bi-wrench-adjustable mr-1.5"></i> TSM
        </button>
      </div>

      {{-- Tab Contents Area --}}
      <div class="relative">

        {{-- TAB 1: DKV / Multimedia --}}
        <div id="tab-dkv" class="tab-pane active" data-aos="fade-up" data-aos-delay="200">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(220,38,38,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-red-100 rounded-full blur-3xl opacity-60 group-hover:bg-red-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-red-600 opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="bi bi-camera-reels"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-red-600 to-pink-500 mb-4">Desain Komunikasi Visual</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-red-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  DKV membekali siswa dengan kemampuan menciptakan komunikasi visual melalui desain, fotografi, videografi, branding, dan media digital. Siswa tidak hanya belajar membuat karya, tetapi
                  juga memahami bagaimana sebuah visual digunakan untuk menyampaikan pesan dan memenuhi kebutuhan dunia industri.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-red-500 mr-2 text-lg"></i> Graphic Design</li>
                  <li><i class="bi bi-check2-circle text-red-500 mr-2 text-lg"></i> Video Editing & Audio</li>
                  <li><i class="bi bi-check2-circle text-red-500 mr-2 text-lg"></i> 2D & 3D Animation</li>
                  <li><i class="bi bi-check2-circle text-red-500 mr-2 text-lg"></i> Photography & Broadcasting</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-red-50 to-red-100 rounded-full flex items-center justify-center text-red-500 text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="bi bi-palette"></i>
                </div>
                <a href="{{ route('dkv') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-red-50 text-red-600 text-sm font-bold rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- TAB 2: MP (Manajemen Perkantoran) --}}
        <div id="tab-mp" class="tab-pane">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(168,85,247,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-purple-100 rounded-full blur-3xl opacity-60 group-hover:bg-purple-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-purple-500 opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="fa-regular fa-building"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-purple-600 to-fuchsia-400 mb-4">Manajemen Perkantoran</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-purple-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  Manajemen Perkantoran mempersiapkan siswa menjadi tenaga profesional yang mampu mengelola administrasi, dokumen, informasi, komunikasi, dan berbagai aktivitas perkantoran. Pembelajaran
                  menggabungkan keterampilan administrasi dengan pemanfaatan teknologi digital.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-purple-500 mr-2 text-lg"></i> Administrasi Perkantoran</li>
                  <li><i class="bi bi-check2-circle text-purple-500 mr-2 text-lg"></i> Administrasi Keuangan Dasar</li>
                  <li><i class="bi bi-check2-circle text-purple-500 mr-2 text-lg"></i> Administrasi Digital</li>
                  <li><i class="bi bi-check2-circle text-purple-500 mr-2 text-lg"></i> Komunikasi Bisnis</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-purple-50 to-purple-100 rounded-full flex items-center justify-center text-purple-500 text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="fa-solid fa-briefcase"></i>
                </div>
                <a href="{{ route('mp') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-purple-50 text-purple-600 text-sm font-bold rounded-full hover:bg-purple-600 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- TAB 3: RPL --}}
        <div id="tab-rpl" class="tab-pane">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(37,99,235,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-blue-100 rounded-full blur-3xl opacity-60 group-hover:bg-blue-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-primary opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="fa-solid fa-code"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-primary to-cyan-400 mb-4">Rekayasa Perangkat Lunak</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-blue-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  RPL membekali siswa dengan kemampuan untuk merancang, membuat, mengembangkan, dan mengelola perangkat lunak. Siswa belajar melalui berbagai projek sehingga tidak hanya memahami teori
                  pemrograman, tetapi juga terbiasa menciptakan solusi digital.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-blue-500 mr-2 text-lg"></i> Database System</li>
                  <li><i class="bi bi-check2-circle text-blue-500 mr-2 text-lg"></i> Pemrograman Web</li>
                  <li><i class="bi bi-check2-circle text-blue-500 mr-2 text-lg"></i> Pemrograman Mobile</li>
                  <li><i class="bi bi-check2-circle text-blue-500 mr-2 text-lg"></i> UI/UX Dasar</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-blue-50 to-blue-100 rounded-full flex items-center justify-center text-primary text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="fa-solid fa-laptop-code"></i>
                </div>
                <a href="{{ route('rpl') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-blue-50 text-blue-600 text-sm font-bold rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- TAB 4: TKJ --}}
        <div id="tab-tkj" class="tab-pane">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(234,179,8,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-yellow-100 rounded-full blur-3xl opacity-60 group-hover:bg-yellow-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-yellow-500 opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="fa-solid fa-wifi"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-yellow-500 to-orange-400 mb-4">Teknik Komputer & Jaringan</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-yellow-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  TKJ membekali siswa dengan kemampuan dalam komputer, jaringan, server, dan teknologi infrastruktur digital. Siswa belajar bagaimana membangun, mengelola, mengamankan, dan memecahkan
                  masalah pada sistem komputer dan jaringan.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-yellow-500 mr-2 text-lg"></i> Perakitan & Perawatan Komputer</li>
                  <li><i class="bi bi-check2-circle text-yellow-500 mr-2 text-lg"></i> Jaringan Komputer</li>
                  <li><i class="bi bi-check2-circle text-yellow-500 mr-2 text-lg"></i> Cybersecurity</li>
                  <li><i class="bi bi-check2-circle text-yellow-500 mr-2 text-lg"></i> Cloud & Teknologi Jaringan Modern</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-yellow-50 to-yellow-100 rounded-full flex items-center justify-center text-yellow-500 text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="fa-solid fa-network-wired"></i>
                </div>
                <a href="{{ route('tkj') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-yellow-50 text-yellow-600 text-sm font-bold rounded-full hover:bg-yellow-500 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- TAB 5: TKR (Teknik Kendaraan Ringan) --}}
        <div id="tab-tkr" class="tab-pane">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(16,185,129,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-emerald-100 rounded-full blur-3xl opacity-60 group-hover:bg-emerald-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-emerald-500 opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="fa-solid fa-car-on"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-emerald-600 to-teal-400 mb-4">Teknik Kendaraan Ringan</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-emerald-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  Program keahlian Teknik Kendaraan Ringan (TKR) mempersiapkan siswa untuk memahami teknologi kendaraan ringan, khususnya mobil, melalui pembelajaran teori dan praktik. Siswa dilatih
                  melakukan perawatan, pemeriksaan, diagnosis, hingga perbaikan kendaraan dengan mengutamakan ketelitian dan standar keselamatan kerja.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-emerald-500 mr-2 text-lg"></i> Dasar-Dasar Teknik Otomotif</li>
                  <li><i class="bi bi-check2-circle text-emerald-500 mr-2 text-lg"></i> Mesin Kendaraan Ringan</li>
                  <li><i class="bi bi-check2-circle text-emerald-500 mr-2 text-lg"></i> Diagnosis & Perbaikan Kendaraan</li>
                  <li><i class="bi bi-check2-circle text-emerald-500 mr-2 text-lg"></i> Teknologi Kendaraan Listrik</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-emerald-50 to-emerald-100 rounded-full flex items-center justify-center text-emerald-500 text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="fa-solid fa-car"></i>
                </div>
                <a href="{{ route('tkr') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-emerald-50 text-emerald-600 text-sm font-bold rounded-full hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- TAB 6: TSM (Teknik Sepeda Motor) --}}
        <div id="tab-tsm" class="tab-pane">
          <div
            class="bg-white rounded-4xl p-8 md:p-12 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-10px_rgba(249,115,22,0.2)] transition-all duration-500 relative overflow-hidden group">
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-orange-100 rounded-full blur-3xl opacity-60 group-hover:bg-orange-200 transition-colors duration-500"></div>
            <div class="absolute bottom-4 right-8 text-9xl text-orange-500 opacity-5 group-hover:opacity-10 transition-opacity duration-500 rotate-12 pointer-events-none">
              <i class="bi bi-wrench-adjustable"></i>
            </div>

            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
              {{-- Area Teks --}}
              <div class="md:w-2/3">
                <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-linear-to-br from-orange-600 to-amber-400 mb-4">Teknik Sepeda Motor</h3>
                <div class="h-1 w-16 bg-gray-200 rounded-full mb-6 group-hover:w-24 group-hover:bg-orange-500 transition-all duration-500"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                  Teknik Sepeda Motor membekali siswa dengan keterampilan dalam perawatan, perbaikan, diagnosis, dan teknologi kendaraan roda dua. Pembelajaran menggabungkan teori dan praktik agar siswa
                  terbiasa bekerja secara teliti, disiplin, dan sesuai standar dunia industri.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 font-medium">
                  <li><i class="bi bi-check2-circle text-orange-500 mr-2 text-lg"></i> Dasar-Dasar Otomotif</li>
                  <li><i class="bi bi-check2-circle text-orange-500 mr-2 text-lg"></i> Sistem Mesin & Pembakaran</li>
                  <li><i class="bi bi-check2-circle text-orange-500 mr-2 text-lg"></i> Sistem Kelistrikan Sepeda Motor</li>
                  <li><i class="bi bi-check2-circle text-orange-500 mr-2 text-lg"></i> Teknologi Sepeda Motor Injeksi</li>
                </ul>
              </div>

              {{-- Area Ikon & Tombol --}}
              <div class="md:w-1/3 flex flex-col items-center justify-center gap-6">
                <div
                  class="w-40 h-40 bg-linear-to-br from-orange-50 to-orange-100 rounded-full flex items-center justify-center text-orange-500 text-6xl shadow-inner group-hover:scale-110 transition-transform duration-500">
                  <i class="fa-solid fa-motorcycle"></i>
                </div>
                <a href="{{ route('tsm') }}"
                  class="inline-flex items-center gap-2 px-6 py-2.5 bg-orange-50 text-orange-600 text-sm font-bold rounded-full hover:bg-orange-600 hover:text-white transition-all duration-300 shadow-sm">
                  Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- Agenda --}}
  <section id="agenda" class="py-16 lg:py-24 bg-white overflow-hidden relative">

    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        <div class="lg:col-span-8 order-2 lg:order-1" data-aos="fade-right">
          <div class="mb-8">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-primary text-xs font-bold tracking-wider uppercase mb-3">
              Events & Activities
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-header mb-4">Agenda Sekolah</h2>
            <p class="text-gray-500 text-lg">Jadwal kegiatan akademik dan non-akademik dalam waktu dekat.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @forelse ($agenda as $item)
              <div
                class="group bg-white rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-lg hover:border-blue-200 transition-all duration-300 flex items-center gap-4 cursor-default h-full relative overflow-hidden">
                <div class="shrink-0 w-16 h-16 rounded-xl bg-blue-50 text-primary flex flex-col items-center justify-center group-hover:scale-105 transition-transform duration-300">
                  <span class="text-xl font-black leading-none">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d') }}</span>
                  <span class="text-[10px] font-bold uppercase mt-1">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F') }}</span>
                </div>
                <div class="flex-1 min-w-0">
                  <h4 class="text-base font-bold text-header group-hover:text-gray-700 transition-colors mb-1 line-clamp-2 leading-snug">
                    {{ $item->judul }}
                  </h4>
                  <p class="text-gray-500 text-xs flex items-center gap-2 line-clamp-1">
                    <span class="shrink-0 w-1.5 h-1.5 rounded-full bg-accent"></span>
                    {{ $item->tempat }}
                  </p>
                </div>
                <div class="hidden xl:flex w-8 h-8 text-primary items-center justify-center group-hover:bg-blue-100' group-hover:text-accent transition-all shrink-0">
                  <i class="fa-solid fa-calendar text-2xl"></i>
                </div>
              </div>
            @empty
              <div class="col-span-1 md:col-span-2 bg-gray-50 rounded-2xl p-8 text-center border border-dashed border-gray-300">
                <div class="w-12 h-12 bg-gray-200 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-3 text-xl">
                  <i class="fa-solid fa-calendar"></i>
                </div>
                <h4 class="text-base font-bold text-gray-700">Belum Ada Agenda</h4>
              </div>
            @endforelse
          </div>

          {{-- Button More --}}
          @if ($agenda->count() >= 6)
            <div class="mt-8">
              <a href="#" class="inline-flex items-center text-sm font-bold text-primary hover:text-blue-800 transition-colors group">
                Lihat Seluruh Agenda
                <i class="fa-solid fa-arrow-right ml-2 transition-transform group-hover:translate-x-2"></i>
              </a>
            </div>
          @endif
        </div>

        {{-- BAGIAN KANAN: Image Illustration (4 Kolom - Lebih ramping tapi tinggi) --}}
        <div class="hidden lg:grid lg:col-span-4 order-1 lg:order-2 relative h-full min-h-75 lg:min-h-125">

          {{-- Dekorasi Blob --}}
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150%] h-full bg-blue-100 rounded-full blur-3xl opacity-40 -z-10"></div>

          {{-- Gambar Utama (Full Height Object Cover) --}}
          <div class="relative h-full w-full rounded-3xl overflow-hidden shadow-2xl border-4 border-white transform rotate-1 hover:rotate-0 transition-transform duration-500 group">
            <img src="{{ asset('assets/senop/img/agenda.webp') }}" alt="Agenda SMK Senopati" class="object-cover">

            {{-- Overlay & Text --}}
            <div class="absolute bottom-0 left-0 w-full h-2/3 bg-linear-to-t from-primary/80 via-primary/40 to-transparent opacity-90"></div>

            <div class="absolute bottom-8 left-6 right-6 text-white">
              <div class="w-10 h-1 bg-blue-500 rounded-full mb-3"></div>
              <h3 class="text-2xl font-bold leading-tight mb-2">Jangan Lewatkan Momen Seru!</h3>
              <p class="text-sm text-white opacity-70">Ikuti terus update kegiatan terbaru sekolah kami setiap minggunya.</p>
            </div>
          </div>

          {{-- Floating Badge --}}
          <div class="absolute -top-4 -right-4 bg-white p-3 rounded-2xl shadow-xl border border-gray-50 animate-bounce-slow hidden xl:block">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center text-xl">
                <i class="fa-regular fa-bell"></i>
              </div>
              <div>
                <p class="text-[10px] text-gray-500 font-bold uppercase">Reminder</p>
                <p class="text-sm font-bold text-header">Cek Jadwal</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- News --}}
  <section id="news" class="py-16 lg:py-24 bg-white overflow-hidden">

    {{-- Header Section (Konsisten dengan desain sebelumnya) --}}
    <div class="container mx-auto px-4 text-center mb-16" data-aos="fade-up" data-aos-delay="100">
      <h2 class="text-3xl md:text-4xl font-extrabold text-header mb-2">Kabar Terbaru</h2>
      <div class="h-1.5 w-20 bg-linear-to-r from-primary to-cyan-400 mx-auto rounded-full mb-4"></div>
      <p class="text-gray-500 max-w-2xl mx-auto">Update terkini seputar prestasi, kegiatan, dan informasi sekolah.</p>
    </div>

    {{-- News Grid --}}
    <div class="container mx-auto px-4" data-aos="fade-up" data-aos-delay="200">
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
        @forelse ($berita as $item)
          <article class="group h-full flex flex-col bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] transition-all duration-300 overflow-hidden">
            <div class="relative h-56 overflow-hidden">
              <span class="absolute top-4 left-4 z-10 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                {{ $item->kategori }}
              </span>
              <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="{{ $item->slug }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="p-6 flex flex-col flex-1">
              <div class="flex items-center gap-4 text-xs text-gray-500 mb-3 font-medium">
                <div class="flex items-center gap-1"><i class="fa-regular fa-calendar text-blue-400"></i> {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</div>
                <div class="flex items-center gap-1"><i class="fa-regular fa-user text-blue-400"></i> {{ $item->author->name }}</div>
              </div>
              <h3 class="text-xl font-bold text-header mb-3 line-clamp-2 transition-colors">
                <a href="{{ route('detail-berita', $item->slug) }}">{{ $item->judul }}</a>
              </h3>
              <p class="text-gray-600 text-sm line-clamp-3 mb-6 flex-1">
                {{ Str::limit(strip_tags($item->konten), 100) }}
              </p>
              <a href="{{ route('detail-berita', $item->slug) }}" class="inline-flex items-center text-sm font-bold text-primary hover:text-accent transition-colors group/link w-max">
                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ml-2 transition-transform duration-300 group-hover/link:translate-x-2"></i>
              </a>
            </div>
          </article>
        @empty
          <div class="col-span-1 md:col-span-2 xl:col-span-4 bg-gray-50 rounded-2xl p-8 text-center border border-dashed border-gray-300">
            <div class="w-12 h-12 bg-gray-200 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-3 text-xl">
              <i class="fa-regular fa-newspaper"></i>
            </div>
            <h4 class="text-base font-bold text-gray-700">Belum Ada Berita</h4>
          </div>
        @endforelse
      </div>
      {{-- Bottom Button --}}
      <div class="mt-16 text-center">
        <a href="{{ route('berita') }}"
          class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-primary rounded-full hover:bg-accent transition-all shadow-lg hover:shadow-blue-500/30 transform hover:-translate-y-1">
          Lihat Semua Berita
          <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  {{-- Testimoni --}}
  <section id="testimoni" class="py-20 bg-gray-50 overflow-hidden relative">

    <div class="container mx-auto px-4 relative z-10">

      {{-- Header --}}
      <div class="container mx-auto px-4 text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl md:text-4xl font-extrabold text-header mb-2">Alumni Berbicara</h2>
        <div class="h-1.5 w-20 bg-linear-to-r from-primary to-cyan-400 mx-auto rounded-full mb-4"></div>
        <p class="text-gray-500 max-w-2xl mx-auto">Kisah inspiratif jejak langkah para alumni SMK Senopati.</p>
      </div>

      {{-- Swiper Container --}}
      <div class="swiper testimoni-swiper max-w-5xl mx-auto" data-aos="zoom-in" data-aos-delay="200">
        <div class="swiper-wrapper mb-12"> {{-- Margin bottom untuk space tombol --}}

          @forelse ($testimoni as $item)
            <div class="swiper-slide">
              <div class="relative w-full h-auto md:h-105 rounded-4xl overflow-hidden group shadow-xl">

                {{-- BG IMAGE --}}
                <div class="absolute inset-0">
                  <img src="{{ Storage::url('testimoni/' . $item->gambar) }}" class="w-full h-full object-cover transition-transform duration-[5s] group-hover:scale-110" alt="BG">
                  <div class="absolute inset-0 bg-linear-to-r from-slate-900 via-slate-900/80 to-slate-900/40"></div>
                </div>

                {{-- CONTENT WRAPPER --}}
                <div class="absolute inset-0 p-6 md:p-12 flex flex-col justify-between z-10">

                  {{-- Top Area: Quote & Avatar --}}
                  <div class="flex flex-col-reverse md:flex-row items-center md:items-start h-full gap-8">

                    {{-- Text Side --}}
                    <div class="w-full md:w-3/5 text-center md:text-left text-white relative pt-4 md:pt-8">
                      <span class="absolute -top-4 left-0 md:-top-6 md:-left-4 text-6xl md:text-8xl font-serif text-white/20 leading-none">“</span>

                      {{-- LOGIKA DINAMIS UKURAN FONT --}}
                      @php
                        $teksBersih = strip_tags($item->testimoni);
                        $panjangKarakter = strlen($teksBersih);

                        // Atur ukuran font berdasarkan jumlah karakter
                        if ($panjangKarakter < 100) {
                            $ukuranFont = 'text-xl md:text-3xl leading-relaxed'; // Pesan Singkat (Besar)
                        } elseif ($panjangKarakter <= 250) {
                            $ukuranFont = 'text-lg md:text-2xl leading-relaxed'; // Pesan Sedang (Menengah)
                        } else {
                            $ukuranFont = 'text-base md:text-lg leading-normal'; // Pesan Panjang (Kecil)
                        }
                      @endphp

                      <h3 class="{{ $ukuranFont }} font-medium font-serif italic text-gray-50 drop-shadow-md transition-all duration-300">
                        {{ $teksBersih }}
                      </h3>
                    </div>

                    {{-- Avatar Side (Floating Effect) --}}
                    <div class="w-full md:w-2/5 flex justify-center md:justify-end relative mt-8 md:mt-0">
                      <div class="relative">
                        <div class="absolute -inset-5 rounded-full border-t-2 border-r-2 border-cyan-400 animate-[spin_8s_linear_infinite]"></div>
                        <div class="absolute -inset-3 rounded-full border-b-2 border-l-2 border-blue-500 opacity-60 animate-[spin_10s_linear_infinite_reverse]"></div>

                        <div class="w-32 h-32 md:w-44 md:h-44 rounded-full border-4 border-white shadow-[0_0_30px_rgba(34,211,238,0.2)] overflow-hidden relative z-10 bg-slate-800">
                          <img src="{{ Storage::url('testimoni/' . $item->gambar) }}" class="w-full h-full object-cover" alt="User">
                        </div>

                        <div
                          class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-slate-800 text-white px-5 py-2 rounded-xl font-bold text-sm shadow-xl whitespace-nowrap z-20 border border-slate-700/50">
                          {{ $item->nama }}
                        </div>
                      </div>
                    </div>

                  </div>

                  {{-- Bottom Bar: Identity & Role --}}
                  <div class="mt-8 md:mt-auto flex items-end justify-between w-full relative z-20">
                    <div class="flex items-center gap-3">
                      <h4 class="text-xl md:text-2xl font-bold text-white tracking-wide">{{ $item->nama }}</h4>
                      <span class="px-3 py-1 rounded-full bg-blue-100/90 text-blue-900 text-xs font-bold tracking-wider shadow-sm">
                        {{ $item->jabatan }}
                      </span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          @empty
            {{-- Empty State Testimoni yang Elegan --}}
            <div
              class="w-full h-auto md:h-105 flex flex-col items-center justify-center bg-linear-to-b from-gray-50 to-white rounded-4xl border-2 border-dashed border-gray-200 p-8 md:p-12 text-center relative overflow-hidden">

              {{-- Watermark Latar Belakang --}}
              <i class="fa-solid fa-quote-right absolute top-10 right-10 text-[10rem] text-gray-100/50 rotate-12 z-0"></i>

              {{-- Ikon dengan Efek Soft Glow --}}
              <div class="relative w-24 h-24 flex items-center justify-center rounded-full bg-blue-50 mb-6 border border-blue-100 z-10">
                <div class="absolute inset-0 bg-blue-200 rounded-full blur-xl opacity-40"></div>
                <i class="fa-solid fa-comments text-4xl text-primary relative z-10"></i>
              </div>

              {{-- Konten Teks --}}
              <div class="relative z-10">
                <h4 class="text-xl md:text-2xl font-black text-gray-800 mb-3">Belum Ada Testimoni</h4>
                <p class="text-gray-500 text-sm md:text-base max-w-md mx-auto leading-relaxed">
                  Kisah inspiratif, ulasan, dan pengalaman dari alumni maupun mitra SMK Senopati belum tersedia saat ini. Nantikan pembaruan dari kami!
                </p>
              </div>

            </div>
          @endforelse
        </div>

        {{-- Navigasi (Kotak Minimalis di posisi tengah bawah) --}}
        <div class="flex justify-center gap-3 mt-4">
          <button
            class="swiper-prev-custom w-10 h-10 rounded-lg bg-white border border-gray-200 text-gray-500 shadow-md hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center">
            <i class="fa-solid fa-chevron-left text-sm font-bold"></i>
          </button>
          <button
            class="swiper-next-custom w-10 h-10 rounded-lg bg-white border border-gray-200 text-gray-500 shadow-md hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center">
            <i class="fa-solid fa-chevron-right text-sm font-bold"></i>
          </button>
        </div>

      </div>
    </div>
  </section>
@endsection

@section('js')
  {{-- Script for Tabs Logic --}}
  <script>
    function switchTab(tabId) {
      // 1. Sembunyikan semua tab pane
      const panes = document.querySelectorAll('.tab-pane');
      panes.forEach(pane => pane.classList.remove('active'));

      // 2. Reset SEMUA tombol ke tampilan "Tidak Aktif"
      const btns = document.querySelectorAll('.tab-btn');
      btns.forEach(btn => {
        // Hapus class warna biru (aktif)
        btn.classList.remove('bg-primary', 'text-white', 'shadow-lg', 'shadow-primary/30');
        // Tambahkan class warna putih, teks abu-abu, shadow tipis, DAN class hover
        btn.classList.add('bg-white', 'text-gray-500', 'hover:bg-gray-100', 'shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]');
      });

      // 3. Tampilkan tab pane yang dipilih
      const activePane = document.getElementById(tabId);
      if (activePane) {
        activePane.classList.add('active');
      }

      // 4. Ubah tampilan tombol yang diklik menjadi "Aktif"
      const activeBtn = document.getElementById('btn-' + tabId);
      if (activeBtn) {
        // HAPUS class warna putih dan class hover (agar saat di-hover tidak berubah warna abu-abu)
        activeBtn.classList.remove('bg-white', 'text-gray-500', 'hover:bg-gray-100', 'shadow-[0_4px_15px_-5px_rgba(0,0,0,0.05)]');
        // Tambahkan class warna biru
        activeBtn.classList.add('bg-primary', 'text-white', 'shadow-lg', 'shadow-primary/30');
      }
    }
  </script>
@endsection
