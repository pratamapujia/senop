@extends('layouts.main')

@section('title')
  <title>Berita Terbaru</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Berita</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Kabar Terbaru</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
    </div>

    <!-- Recent News Section -->
    <div class="recent-news container">
      <div class="row gy-5" data-aos="fade-up" data-aos-delay="100">
        @foreach ($berita as $data)
          <div class="col-xl-3 col-md-6">
            <div class="post-box">
              <div class="post-img"><img src="{{ $data->foto }}" class="img-fluid" alt="{{ $data->slug }}"></div>
              <div class="meta">
                <span class="post-date">{{ \Carbon\Carbon::parse($data->tanggal)->format('d M Y') }}</span>
                <span class="post-author">/{{ $data->penulis }}</span>
              </div>
              <h3 class="post-title">{{ $data->judul }}</h3>
              <p>{!! $data->berita !!}</p>
              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
