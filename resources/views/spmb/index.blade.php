@extends('layouts.main')

@section('title')
  <title>SPMB</title>
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
        <span class="text-xs font-bold text-cyan-300 uppercase tracking-wider">SPMB</span>
      </div>

      {{-- Judul --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
        SPMB SMK Senopati
      </h1>
      {{-- Deskripsi --}}
      <p class="text-blue-100/80 text-lg max-w-2xl mx-auto font-light leading-relaxed">
        Seleksi Penerimaan Murid Baru SMK Senopati, gerbang awalmu menuju masa depan yang lebih cerah
      </p>

    </div>
  </section>

  {{-- SPMB SECTION --}}
  <section class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        {{-- KOLOM KIRI: POSTER --}}
        <div data-aos="fade-up">
          <div class="lg:sticky lg:top-24">
            <img src="/images/poster-spmb.jpg" alt="Poster SPMB SMK Senopati" class="w-full h-auto rounded-2xl shadow-xl shadow-slate-200 border border-gray-100">
          </div>
        </div>

        {{-- KOLOM KANAN: ALUR PENDAFTARAN --}}
        <div>

          <h2 class="text-2xl md:text-3xl font-black text-slate-900 mb-2">Alur Pendaftaran</h2>
          <p class="text-gray-500 mb-10 leading-relaxed">Ikuti langkah-langkah berikut untuk mendaftar sebagai peserta didik baru di SMK Senopati.</p>

          <div class="relative">
            {{-- Garis Vertikal --}}
            <div class="absolute left-4 top-2 bottom-2 w-0.5 bg-gray-200"></div>

            <div class="space-y-10">

              <div class="relative flex items-start gap-6 group" data-aos="fade-up">
                <div
                  class="relative z-10 shrink-0 w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-50 shadow-[0_0_10px_2px_rgba(249,115,22,0.7),0_0_20px_6px_rgba(249,115,22,0.35)] flex items-center justify-center text-white text-xs font-black group-hover:scale-110 group-hover:shadow-[0_0_14px_3px_rgba(249,115,22,0.9),0_0_28px_10px_rgba(249,115,22,0.5)] transition-all duration-300">
                  1</div>
                <div class="pt-0.5">
                  <h3 class="text-lg font-black text-slate-900 mb-1">Pendaftaran Online</h3>
                  <p class="text-gray-500 leading-relaxed">Calon peserta didik mengisi formulir pendaftaran secara online melalui website resmi sekolah dan mengunggah berkas yang dibutuhkan.</p>
                </div>
              </div>

              <div class="relative flex items-start gap-6 group" data-aos="fade-up">
                <div
                  class="relative z-10 shrink-0 w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-50 shadow-[0_0_10px_2px_rgba(249,115,22,0.7),0_0_20px_6px_rgba(249,115,22,0.35)] flex items-center justify-center text-white text-xs font-black group-hover:scale-110 group-hover:shadow-[0_0_14px_3px_rgba(249,115,22,0.9),0_0_28px_10px_rgba(249,115,22,0.5)] transition-all duration-300">
                  2</div>
                <div class="pt-0.5">
                  <h3 class="text-lg font-black text-slate-900 mb-1">Verifikasi Berkas</h3>
                  <p class="text-gray-500 leading-relaxed">Panitia memeriksa kelengkapan dan keabsahan dokumen yang telah diunggah oleh calon peserta didik.</p>
                </div>
              </div>

              <div class="relative flex items-start gap-6 group" data-aos="fade-up">
                <div
                  class="relative z-10 shrink-0 w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-50 shadow-[0_0_10px_2px_rgba(249,115,22,0.7),0_0_20px_6px_rgba(249,115,22,0.35)] flex items-center justify-center text-white text-xs font-black group-hover:scale-110 group-hover:shadow-[0_0_14px_3px_rgba(249,115,22,0.9),0_0_28px_10px_rgba(249,115,22,0.5)] transition-all duration-300">
                  3</div>
                <div class="pt-0.5">
                  <h3 class="text-lg font-black text-slate-900 mb-1">Tes Seleksi</h3>
                  <p class="text-gray-500 leading-relaxed">Peserta yang berkasnya dinyatakan lengkap mengikuti tes seleksi sesuai jadwal yang telah ditentukan sekolah.</p>
                </div>
              </div>

              <div class="relative flex items-start gap-6 group" data-aos="fade-up">
                <div
                  class="relative z-10 shrink-0 w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-50 shadow-[0_0_10px_2px_rgba(249,115,22,0.7),0_0_20px_6px_rgba(249,115,22,0.35)] flex items-center justify-center text-white text-xs font-black group-hover:scale-110 group-hover:shadow-[0_0_14px_3px_rgba(249,115,22,0.9),0_0_28px_10px_rgba(249,115,22,0.5)] transition-all duration-300">
                  4</div>
                <div class="pt-0.5">
                  <h3 class="text-lg font-black text-slate-900 mb-1">Pengumuman Kelulusan</h3>
                  <p class="text-gray-500 leading-relaxed">Hasil seleksi diumumkan melalui website sekolah dan dapat dicek langsung menggunakan nomor pendaftaran.</p>
                </div>
              </div>

              <div class="relative flex items-start gap-6 group" data-aos="fade-up">
                <div
                  class="relative z-10 shrink-0 w-8 h-8 rounded-full bg-orange-500 border-2 border-gray-50 shadow-[0_0_10px_2px_rgba(249,115,22,0.7),0_0_20px_6px_rgba(249,115,22,0.35)] flex items-center justify-center text-white text-xs font-black group-hover:scale-110 group-hover:shadow-[0_0_14px_3px_rgba(249,115,22,0.9),0_0_28px_10px_rgba(249,115,22,0.5)] transition-all duration-300">
                  5</div>
                <div class="pt-0.5">
                  <h3 class="text-lg font-black text-slate-900 mb-1">Daftar Ulang</h3>
                  <p class="text-gray-500 leading-relaxed">Peserta yang dinyatakan lulus melakukan daftar ulang sesuai jadwal untuk resmi menjadi siswa SMK Senopati.</p>
                </div>
              </div>

            </div>
          </div>

          {{-- Ganti nomor 628123456789 dengan nomor WhatsApp aktif Admin SPMB / Waka Humas --}}
          <a href="https://wa.me/628123456789?text={{ urlencode('Halo Admin SPMB SMK Senopati, saya ingin bertanya tentang pendaftaran peserta didik baru.') }}" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-2 mt-10 px-6 py-3 rounded-full bg-primary hover:bg-accent text-white font-black shadow-lg shadow-blue-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.67.15-.198.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.571-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
              <path
                d="M12.001 2C6.478 2 2 6.478 2 12c0 1.821.487 3.53 1.338 5.003L2 22l5.13-1.32A9.947 9.947 0 0 0 12.001 22C17.523 22 22 17.523 22 12S17.523 2 12.001 2zm0 18.05a8.02 8.02 0 0 1-4.09-1.117l-.293-.174-3.043.783.812-2.967-.19-.304A8.02 8.02 0 1 1 20.02 12a8.03 8.03 0 0 1-8.019 8.05z" />
            </svg>
            Daftar Sekarang
          </a>

        </div>

      </div>

    </div>
  </section>
@endsection
