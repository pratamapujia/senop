@extends('layouts.main')

@section('title')
  <title>Galeri Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Galeri</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li class="current">Galeri</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="galeri" class="galeri section-galeri">
    <div class="container section-galeri-title" data-aos="fade-up" data-aos-delay="100">
      <h2>Galeri Foto Kegiatan</h2>
      <div class="galeri-title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Yuk, mengenal lebih dekat dengan SMK Senopati</p>
    </div>
    <div class="container pb-5" data-aos="zoom-in" data-aos-delay="200">
      <div class="galeri-item">
        <div class="row align-items-center">
          @foreach ($galeri as $data)
            @php
              $path = Storage::url('galeri/' . $data->foto);
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ url($path) }}" class="card-img-top" alt="{{ $data->judul_foto }}">
                <div class="card-body">
                  <p class="card-text text-center">{{ $data->judul_foto }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="galeri-btn">
        {{-- Pagination --}}
        {{ $galeri->withQueryString()->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </section>
@endsection
