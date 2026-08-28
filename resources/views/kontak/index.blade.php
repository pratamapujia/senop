@extends('layouts.main')

@section('title')
  <title>Kontak</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">Kontak</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Kontak
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Hubungi kami untuk informasi lebih lanjut.
      </p>

    </div>
  </section>

  {{-- CONTACT SECTION --}}
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">

        <div class="flex flex-col lg:flex-row gap-12">

          {{-- KIRI: INFORMASI KONTAK --}}
          <div class="lg:w-1/3" data-aos="fade-right">
            <h2 class="text-3xl font-black text-slate-900 mb-6">Informasi Kontak</h2>
            <p class="text-gray-500 mb-8">Punya pertanyaan seputar SMK Senopati? Silakan hubungi kami melalui saluran berikut.</p>

            <div class="space-y-6">
              {{-- Alamat --}}
              <div class="flex gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-slate-800">Alamat Sekolah</h4>
                  <p class="text-sm text-gray-500">Jl. Senopati No. 02, Betro, Kec. Sedati, Kab. Sidoarjo, Jawa Timur, Indonesia</p>
                </div>
              </div>

              {{-- Email --}}
              <div class="flex gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center text-cyan-600 shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-slate-800">Email Resmi</h4>
                  <p class="text-sm text-gray-500">info@smksenopati.sch.id</p>
                </div>
              </div>

              {{-- Telepon --}}
              <div class="flex gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-slate-800">Telepon / WhatsApp</h4>
                  <p class="text-sm text-gray-500">+62 123 4567 890</p>
                </div>
              </div>
            </div>
          </div>

          {{-- KANAN: FORMULIR PESAN --}}
          <div class="lg:w-2/3" data-aos="fade-left">
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-gray-100">
              <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                    <input type="text" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                      placeholder="Masukkan nama...">
                  </div>
                  <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Email</label>
                    <input type="email" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                      placeholder="example@mail.com">
                  </div>
                </div>

                <div>
                  <label class="block text-sm font-bold text-slate-700 mb-2">Subjek Pesan</label>
                  <input type="text" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                    placeholder="Tanya PPDB, Administrasi, dll.">
                </div>

                <div>
                  <label class="block text-sm font-bold text-slate-700 mb-2">Pesan Anda</label>
                  <textarea rows="4" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                    placeholder="Tuliskan pesan secara detail..."></textarea>
                </div>

                <button type="submit" class="w-full bg-slate-900 text-white font-bold py-4 rounded-xl hover:bg-blue-600 transition-all shadow-lg hover:shadow-blue-200 active:scale-[0.98]">
                  Kirim Pesan Sekarang
                </button>
              </form>
            </div>
          </div>

        </div>

        {{-- MAPS SECTION (OPSIONAL) --}}
        <div class="mt-20 rounded-3xl overflow-hidden shadow-sm border border-gray-100 h-100 grayscale hover:grayscale-0 transition-all duration-700" data-aos="zoom-in">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6261564661295!2d112.7625807!3d-7.395718899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e5bb37214749%3A0x3eb190ed23bd402b!2sSMK%20SENOPATI!5e0!3m2!1sid!2sid!4v1776143443492!5m2!1sid!2sid"
            class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>
    </div>
  </section>
@endsection
