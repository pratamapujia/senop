@extends('layouts.main')

@section('title')
  <title>SMK SENOPATI</title>
@endsection

@section('main')
  {{-- Hero Section --}}
  <section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center content">
        <div class="col-md-6 col-lg-6 col-12 col-sm-12" data-aos="fade-up" data-aos-delay="200">
          <h2>Selamat Datang di SMK Senopati Sedati</h2>
          <p class="lead">Mandiri, Kompeten, Siap Kerja</p>
          <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('ppdb') }}" class="btn btn-primary">Info PPDB</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 col-sm-12">
          <div class="hero-image">
            <img src="{{ asset('assets/senop/img/hero.webp') }}" data-aos="zoom-out" data-aos-delay="300" alt="Hero Image" class="img-fluid">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- About Section --}}
  <section id="about" class="about section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kenapa harus senopati ?</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Alasan kenapa kalian semua harus bergabung dengan SMK Senopati</p>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="100">
          <div class="about-item">
            <div class="about-item-icon blue">
              <i class="bi bi-door-open"></i>
            </div>
            <h4>Fasilitas Lengkap</h4>
            <p>SMK Senopati memiliki fasilitas yang lengkap untuk menunjang pembelajaran</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="200">
          <div class="about-item">
            <div class="about-item-icon yellow">
              <i class="bi bi-house-heart-fill"></i>
            </div>
            <h4>Lingkungan Nyaman</h4>
            <p>SMK Senopati memiliki lingkungan yang nyaman bagi peserta didik</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="300">
          <div class="about-item">
            <div class="about-item-icon red">
              <i class="bi bi-person-workspace"></i>
            </div>
            <h4>Pengajar Kompeten</h4>
            <p>SMK Senopati memiliki pengajar yang kompeten dan bersertifikasi</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="400">
          <div class="about-item">
            <div class="about-item-icon green">
              <i class="bi bi-diagram-3"></i>
            </div>
            <h4>Kerjasama Luas</h4>
            <p>SMK Senopati memiliki kerjasama yang luas dengan industri</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-4 position-relative" data-aos="fade-right" data-aos-delay="200">
          <div class="about-image">
            <img src="assets/senop/img/profile/profile-square-2.webp" alt="Profile Image" class="img-fluid rounded-4">
          </div>
        </div>
        <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
          <div class="about-content">
            <h2>Sambutan Kepala Sekolah</h2>
            <p class="lead mb-4">Assalamu’alaikum Wr. Wb. <br> <br>
              Selamat datang di web resmi SMK Senopati Sedati Sidoarjo , web ini berfungsi sebagai media untuk menginformasikan ke publik perihal profil dan kegiatan yang ada di SMK Senopati.
              Singkat kata kami harap dari pembaca publik maupun civitas terhadap isi dan program sekolah yang termuat di web ini dapat kiranya memberikan saran, kritik dan info masukan melalui
              kontak yang sudah tertera di web ini. <br> <br>
              Akhirnya kami sampaikan terimakasih atas kunjungan dan perhatiannya, mudah-mudahan website ini bisa memberikan manfaat kepada masyarakat umum dan kepada civitas SMK Senopati Sedati
              Sidoarjo . <br> <br>
              Wassalamu’alaikum Wr. Wb.</p>
            <div class="signature mt-4">
              <div class="signature-info">
                <h4> - Fathoni, M.Pd.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Siswa Section --}}
  <section id="siswa" class="siswa section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kami memiliki lebih dari 1000+ siswa</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>SMK Senopati termasuk dalam sekolah favorit di kabupaten Sidoarjo.
      </p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="siswa-block">
        <div class="row justify-content-center">
          @foreach ($jsiswa as $data)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="200">
              <div class="siswa-item py-5 my-3">
                <div class="siswa-shape1"></div>
                <span class="text-{{ $loop->iteration }}">{{ $data->total_siswa }}</span>
                <small class="fw-bold">{{ $data->jurusan }}</small>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- Agenda --}}
  <section id="agenda" class="agenda light-background">
    <div class="container py-2" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
          <div class="agenda-title">
            <h2>Agenda Sekolah</h2>
            <p>Agenda Sekolah SMK Senopati selama beberapa hari kedepan.</p>
          </div>
          <div class="agenda-content">
            <div class="agenda-card-container">
              @foreach ($agenda as $data)
                <div class="agenda-card">
                  <div class="icon-box">
                    <i class="bi bi-calendar-week"></i>
                  </div>
                  <div class="agenda-text">
                    <h4 class="Upper">{{ $data->nama_agenda }}</h4>
                    <p><i class="bi bi-play-fill"></i> {{ $data->keterangan }}</p>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="agenda-btn">
              <a href="{{ route('agenda.landing') }}" class="btn btn-primary"><i class="bi bi-arrow-right"></i> Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 position-relative my-5" data-aos="zoom-out" data-aos-delay="400">
          <div class="agenda-image">
            <img src="{{ asset('assets/senop/img/agenda.webp') }}" alt="Profile Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Gallery --}}
  <section id="galeri" class="galeri section">
    <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
      <h2>Galeri Foto Kegiatan</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Yuk, mengenal lebih dekat dengan SMK Senopati</p>
    </div>
    <div class="container pb-5" data-aos="zoom-in" data-aos-delay="200">
      <div class="galeri-item">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="300">
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
        <a href="{{ route('galeri.landing') }}" class="btn btn-primary"><i class="bi bi-arrow-right"></i> Lihat Selengkapnya</a>
      </div>
    </div>
  </section>

  {{-- Testimoni --}}
  <section id="testimoni" class="testimoni section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kata Alumni</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Testimoni alumni terbaik SMK Senopati.
      </p>
    </div>
    <div class="container" data-aos="fade-left-up" data-aos-delay="100">
      <div class="swiper init-swiper" data-speed="600">
        <script type="aplication/json" class="swiper-config">
              {
                "loop" : true,
                "speed":600,
                "autoplay":{
                  "delay":5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
        <div class="swiper-wrapper" data-aos="zoom-in" data-aos-delay="200">
          @foreach ($testimoni as $data)
            @php
              $path = Storage::url('testimoni/' . $data->foto);
            @endphp
            <div class="swiper-slide">
              <div class="testimoni-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{ $data->testimoni }}</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ url($path) }}" class="testimoni-img" alt="img-testimoni">
                <h3>{{ $data->nama }}</h3>
                <h4>{{ $data->credit }}</h4>
              </div>
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
@endsection
