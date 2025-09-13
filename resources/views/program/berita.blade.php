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
        <div class="col-xl-3 col-md-6">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('assets/static/images/samples/1.png') }}" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, December 12</span>
              <span class="post-author"> / Julia Parker</span>
            </div>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
            <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('assets/static/images/samples/2.png') }}" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Fri, September 05</span>
              <span class="post-author"> / Mario Douglas</span>
            </div>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
            <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('assets/static/images/samples/3.png') }}" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, July 27</span>
              <span class="post-author"> / Lisa Hunter</span>
            </div>
            <h3 class="post-title">Quia assumenda est et veritati</h3>
            <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('assets/static/images/samples/4.png') }}" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, Sep 16</span>
              <span class="post-author"> / Mario Douglas</span>
            </div>
            <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
            <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
