@extends('layouts.main')

@section('title')
  <title>Jurusan DKV - SMK Senopati</title>
@endsection

@section('main')
  {{-- HERO SECTION DENGAN ELEMEN KREATIF --}}
  <section class="relative -mt-32 pt-48 pb-20 lg:pt-60 lg:pb-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-rose-900 via-slate-900 to-violet-900"></div>

    {{-- ELEMEN SPESIFIK JURUSAN (DKV) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
      {{-- Ikon Pen Tool --}}
      <div class="absolute top-1/4 left-10 animate-bounce duration-4500">
        <svg class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
      </div>
      {{-- Ikon Kamera --}}
      <div class="absolute bottom-1/4 right-20 animate-pulse duration-3500">
        <svg class="w-20 h-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
          <path stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      {{-- Ikon Palet Warna --}}
      <div class="absolute top-1/2 right-1/4 opacity-40 animate-spin duration-15000">
        <svg class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-width="1" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.172-1.172a4 4 0 115.656 5.656l-1.172 1.172" />
        </svg>
      </div>
    </div>

    <div class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-rose-500 rounded-full mix-blend-screen filter blur-[100px] opacity-25 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 translate-x-1/3 translate-y-1/3 w-120 h-120 bg-violet-600 rounded-full mix-blend-screen filter blur-[120px] opacity-20"></div>

    <div class="absolute inset-0 opacity-[0.15]"
      style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
        <a href="/" class="text-xs font-bold text-gray-300 hover:text-white uppercase tracking-wider transition-colors">Jurusan</a>
        <span class="text-gray-500 text-xs">/</span>
        <span class="text-xs font-bold text-rose-300 uppercase tracking-wider">DKV</span>
      </div>

      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        Desain Komunikasi Visual
      </h1>
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Mengubah ide menjadi visual yang bercerita melalui perpaduan seni, teknologi, dan strategi komunikasi.
      </p>
    </div>
  </section>

  {{-- ISI DETAIL JURUSAN --}}
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        {{-- SISI KIRI: DESKRIPSI & MATERI --}}
        <div class="lg:col-span-2 space-y-12" data-aos="fade-right">
          <div>
            <h2 class="text-3xl font-black text-slate-900 mb-6">Kreativitasmu Bisa Jadi Profesi.</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
              DKV membekali siswa dengan kemampuan menciptakan komunikasi visual melalui desain, fotografi, videografi, branding, dan media digital. Siswa tidak hanya belajar membuat karya, tetapi juga
              memahami bagaimana sebuah visual digunakan untuk menyampaikan pesan dan memenuhi kebutuhan dunia industri.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Materi 1 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-rose-300 transition-all">
              <div class="w-12 h-12 bg-rose-100 rounded-2xl flex items-center justify-center text-rose-600 mb-5">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Dasar-dasar desain grafis</h4>
              <p class="text-sm text-gray-500">Penguasaan Adobe Illustrator & Photoshop untuk pembuatan logo, poster, dan identitas visual perusahaan.</p>
            </div>
            {{-- Materi 2 --}}
            <div class="bg-white p-8 rounded-4xl border border-gray-100 shadow-sm hover:border-violet-300 transition-all">
              <div class="w-12 h-12 bg-violet-100 rounded-2xl flex items-center justify-center text-violet-600 mb-5">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
              </div>
              <h4 class="font-bold text-slate-800 mb-2">Multimedia & Videografi</h4>
              <p class="text-sm text-gray-500">Teknik pengambilan gambar, editing video, motion graphics, dan produksi konten media sosial.</p>
            </div>
          </div>
        </div>

        {{-- SISI KANAN: PROSPEK & FOTO --}}
        <div class="space-y-8" data-aos="fade-left">
          {{-- Prospek Card --}}
          <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl relative overflow-hidden">
            <h3 class="text-xl font-black mb-6">Prospek Karier</h3>
            <ul class="space-y-4">
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div> Graphic Designer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div> Content Creator / YouTuber
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div> Photographer & Videographer
              </li>
              <li class="flex items-center gap-3 text-sm text-gray-300">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div> Creative Director
              </li>
            </ul>
          </div>

          {{-- Foto Praktek DKV 3:4 --}}
          <div class="aspect-3/4 rounded-[2.5rem] overflow-hidden shadow-lg border-4 border-white group">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=600" alt="Siswa DKV sedang mendesain"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
