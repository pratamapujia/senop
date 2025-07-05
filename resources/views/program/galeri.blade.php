@extends('layouts.main')

@section('title')
  <title>Galeri Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Galeri</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Galeri</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Yuk, mengenal lebih dekat dengan SMK Senopati</p>
    </div>
  </div>

  {{-- Main --}}
  <section id="galeri" class="galeri section-galeri">
    <div class="container pb-5" data-aos="zoom-in" data-aos-delay="100">
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
        {{ $galeri->withQueryString()->links('vendor.pagination.mypagination') }}
      </div>
    </div>
  </section>
@endsection
