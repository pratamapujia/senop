<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK SENOPATI</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/static/bootstrap/css/bootstrap.min.css') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="{{ asset('assets/static/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- AOS Animation --}}
    <link rel="stylesheet" href="{{ asset('assets/static/aos/aos.css') }}">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="{{ asset('assets/static/swiper/swiper-bundle.min.css') }}">

    {{-- Senop Style --}}
    <link rel="stylesheet" href="{{ asset('assets/senop/style.css') }}">
  </head>

  <body class="index-page">

    {{-- Header --}}
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Senopati</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#">Beranda</a></li>
            <li class="dropdown"><a href="#">Tentang Kami <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="">Profil Sekolah</a></li>
                <li><a href="">Visi dan Misi</a></li>
                <li><a href="">Struktur Organisasi</a></li>
                <li><a href="">Fasilitas</a></li>
                <li><a href="">Prestasi</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#">Program <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="">Profil Jurusan</a></li>
                <li><a href="">Ekstrakurikuler</a></li>
                <li><a href="">Berita Terbaru</a></li>
              </ul>
            </li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">PPDB</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div class="header-social-links">
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </header>


    <main class="main">

      {{-- Hero Section --}}
      <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row align-items-center content">
            <div class="col-md-6 col-lg-6 col-12 col-sm-12" data-aos="fade-up" data-aos-delay="200">
              <h2>Selamat Datang</h2>
              <p class="lead">Ini adalah website SMK Senopati, mari bergabung bersama kami</p>
              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="btn btn-primary">Daftar Disini</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12 col-sm-12">
              <div class="hero-image">
                <img src="{{ asset('assets/senop/img/profile/profile-1.webp') }}" data-aos="zoom-out" data-aos-delay="300" alt="Hero Image" class="img-fluid">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- About Section --}}
      <section id="about" class="about section-about light-background">
        <div class="container section-about-title" data-aos="fade-up">
          <h2>Kenapa harus senop ?</h2>
          <div class="about-title-shape">
            <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
            </svg>
          </div>
          <p>Alasan Kenapa kalian semua harus bergabung dengan SMK Senopati</p>
        </div>
        <div class="container pb-5">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <div class="about-item">
                <div class="about-item-icon blue">
                  <i class="bi bi-card-checklist"></i>
                </div>
                <h4>Fasilitas Lengkap</h4>
                <p>SMK Senopati memiliki fasilitas yang lengkap untuk menunjang pembelajaran</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="200">
              <div class="about-item">
                <div class="about-item-icon yellow">
                  <i class="bi bi-card-checklist"></i>
                </div>
                <h4>Lingkungan Nyaman</h4>
                <p>SMK Senopati memiliki lingkungan yang nyaman bagi peserta didik</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="300">
              <div class="about-item">
                <div class="about-item-icon red">
                  <i class="bi bi-card-checklist"></i>
                </div>
                <h4>Pengajar Kompeten</h4>
                <p>SMK Senopati memiliki pengajar yang kompeten dan bersertifikasi</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="400">
              <div class="about-item">
                <div class="about-item-icon green">
                  <i class="bi bi-card-checklist"></i>
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
      <section id="siswa" class="siswa section-siswa light-background">
        <div class="container section-siswa-title" data-aos="fade-up">
          <h2>Kami memiliki lebih dari 1000+ siswa</h2>
          <div class="siswa-title-shape">
            <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
            </svg>
          </div>
          <p>SMK Senopati termasuk dalam sekolah favorit di kabupaten Sidoarjo. <br> SMK Senopati memiliki lima jurusan yang dapat ditempuh oleh siswa. Jadi ayo buruan bergabung dengan SMK Senopati
          </p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="siswa-block">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="100">
                <div class="siswa-item py-5 my-3">
                  <div class="siswa-shape1"></div>
                  <span class="text-warning">300</span>
                  <small class="fw-bold">RPL</small>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="siswa-item py-5 my-3">
                  <div class="siswa-shape2"></div>
                  <span class="text-primary">300</span>
                  <small class="fw-bold">TKJ</small>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="500">
                <div class="siswa-item py-5 my-3">
                  <div class="siswa-shape3"></div>
                  <span class="text-danger">300</span>
                  <small class="fw-bold">OTKP</small>
                </div>
              </div>
            </div>
          </div>
          <div class="siswa-block">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="siswa-item py-5 my-3">
                  <div class="siswa-shape4"></div>
                  <span class="text-info">300</span>
                  <small class="fw-bold">TKR</small>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <div class="siswa-item py-5 my-3">
                  <div class="siswa-shape5"></div>
                  <span class="text-success">300</span>
                  <small class="fw-bold">TSM</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- Agenda --}}
      <section id="agenda" class="agenda light-background">
        <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
              <div class="agenda-title">
                <h2>Agenda Sekolah</h2>
                <p>Agenda Sekolah SMK Senopati selama beberapa hari kedepan.</p>
              </div>
              <div class="agenda-content">
                <div class="agenda-card-container">
                  <div class="agenda-card">
                    <div class="icon-box">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class="agenda-text">
                      <h4>Ujian Nasional</h4>
                      <p><i class="bi bi-play-fill"></i> 2-5 Juli 2025</p>
                    </div>
                  </div>
                  <div class="agenda-card">
                    <div class="icon-box">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class="agenda-text">
                      <h4>Libur Akhir Semester</h4>
                      <p><i class="bi bi-play-fill"></i> 6-20 Juli 2025</p>
                    </div>
                  </div>
                  <div class="agenda-card">
                    <div class="icon-box">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class="agenda-text">
                      <h4>Awal Masuk Sekolah</h4>
                      <p><i class="bi bi-play-fill"></i> 21 Juli 2025</p>
                    </div>
                  </div>
                  <div class="agenda-card">
                    <div class="icon-box">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class="agenda-text">
                      <h4>Class Meet 2025</h4>
                      <p><i class="bi bi-play-fill"></i> 25 Juli 2025</p>
                    </div>
                  </div>
                </div>
                <div class="agenda-btn">
                  <a href="#" class="btn btn-primary"><i class="bi bi-arrow-right"></i> Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 position-relative my-5 order-1 order-lg-2" data-aos="zoom-out" data-aos-delay="400">
              <div class="agenda-image">
                <img src="assets/senop/img/profile/profile-square-2.webp" alt="Profile Image" class="img-fluid rounded-4">
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- Gallery --}}
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
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-1.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-2.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-4.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-5.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-7.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-8.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/portfolio/portfolio-10.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
                <div class="card">
                  <img src="{{ asset('assets/senop/img/profile/profile-1.webp') }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text text-center">Kegiatan foto</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- Testimoni --}}
      <section id="testimoni" class="testimoni section-testimoni">
        <div class="container section-testimoni-title" data-aos="fade-left">
          <h2>Kata Alumni</h2>
          <div><span>Testimoni</span> <span class="description-title">Alumni SMK Senopati</span></div>
        </div>
        <div class="container" data-aos="fade-left-up" data-aos-delay="100">
          <div class="swiper init-swiper" data-speed="600" data-aos-delay="5000">
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
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimoni-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid minus sapiente in, voluptates molestias iure tempora! Modi eaque sequi sapiente quidem, quod veritatis hic
                      ipsum iusto cumque. Autem, distinctio sit!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('assets/senop/img/person/person-f-5.webp') }}" class="testimoni-img" alt="">
                  <h3>Rere Ajengwati</h3>
                  <h4>SMK Senopati</h4>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimoni-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid minus sapiente in, voluptates molestias iure tempora! Modi eaque sequi sapiente quidem, quod veritatis hic
                      ipsum iusto cumque. Autem, distinctio sit!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('assets/senop/img/person/person-f-8.webp') }}" class="testimoni-img" alt="">
                  <h3>Rere Ajengwati</h3>
                  <h4>SMK Senopati</h4>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimoni-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid minus sapiente in, voluptates molestias iure tempora! Modi eaque sequi sapiente quidem, quod veritatis hic
                      ipsum iusto cumque. Autem, distinctio sit!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('assets/senop/img/person/person-m-7.webp') }}" class="testimoni-img" alt="">
                  <h3>Rere Ajengwati</h3>
                  <h4>SMK Senopati</h4>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimoni-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid minus sapiente in, voluptates molestias iure tempora! Modi eaque sequi sapiente quidem, quod veritatis hic
                      ipsum iusto cumque. Autem, distinctio sit!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img src="{{ asset('assets/senop/img/person/person-m-9.webp') }}" class="testimoni-img" alt="">
                  <h3>Rere Ajengwati</h3>
                  <h4>SMK Senopati</h4>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      {{-- Partners --}}
      <section id="partners" class="partners section-partners">
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
          <div class="partners-slider">
            <div class="partners-track track-1" data-aos="fade-right" data-aos-delay="200">
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/1.png') }}" class="img-fluid" alt="Partners 1">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/2.png') }}" class="img-fluid" alt="Partners 2">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/3.png') }}" class="img-fluid" alt="Partners 3">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/4.png') }}" class="img-fluid" alt="Partners 4">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/5.png') }}" class="img-fluid" alt="Partners 5">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/6.png') }}" class="img-fluid" alt="Partners 6">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/7.png') }}" class="img-fluid" alt="Partners 7">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/8.png') }}" class="img-fluid" alt="Partners 8">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/9.png') }}" class="img-fluid" alt="Partners 9">
              </div>

              {{-- Duplikat untuk looping --}}
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/1.png') }}" class="img-fluid" alt="Partners 1">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/2.png') }}" class="img-fluid" alt="Partners 2">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/3.png') }}" class="img-fluid" alt="Partners 3">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/4.png') }}" class="img-fluid" alt="Partners 4">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/5.png') }}" class="img-fluid" alt="Partners 5">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/6.png') }}" class="img-fluid" alt="Partners 6">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/7.png') }}" class="img-fluid" alt="Partners 7">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/8.png') }}" class="img-fluid" alt="Partners 8">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/9.png') }}" class="img-fluid" alt="Partners 9">
              </div>
            </div>
            <div class="partners-track track-2" data-aos="fade-left" data-aos-delay="300">
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/10.png') }}" class="img-fluid" alt="Partners 10">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/11.png') }}" class="img-fluid" alt="Partners 11">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/12.png') }}" class="img-fluid" alt="Partners 12">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/13.png') }}" class="img-fluid" alt="Partners 13">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/14.png') }}" class="img-fluid" alt="Partners 14">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/15.png') }}" class="img-fluid" alt="Partners 15">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/16.png') }}" class="img-fluid" alt="Partners 16">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/17.png') }}" class="img-fluid" alt="Partners 17">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/18.png') }}" class="img-fluid" alt="Partners 18">
              </div>

              {{-- Duplikat untuk looping --}}
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/10.png') }}" class="img-fluid" alt="Partners 10">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/11.png') }}" class="img-fluid" alt="Partners 11">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/12.png') }}" class="img-fluid" alt="Partners 12">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/13.png') }}" class="img-fluid" alt="Partners 13">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/14.png') }}" class="img-fluid" alt="Partners 14">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/15.png') }}" class="img-fluid" alt="Partners 15">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/16.png') }}" class="img-fluid" alt="Partners 16">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/17.png') }}" class="img-fluid" alt="Partners 17">
              </div>
              <div class="partners-slide">
                <img src="{{ asset('assets/senop/img/partners/18.png') }}" class="img-fluid" alt="Partners 18">
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    {{-- Footer --}}
    <footer class="footer" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-logo">
              <img src="{{ asset('assets/senop/img/profile/profile-1.webp') }}" alt="Footer Logo" class="img-fluid">
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <h5>Menu Utama</h5>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Profil Sekolah</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Berita Terbaru</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">PPDB</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <h5>Program</h5>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Profil Jurusan</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Agenda</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Galeri</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Virtual Tour</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <h5>Statistik</h5>
                <h3>Website Senopati</h3>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Visitor Hari Ini : 12</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Visitor Bulan Ini : 200</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Total Visitor : 1000</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row my-4">
              <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <h5>Hubungi Kami</h5>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">031-123123123</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">telp WA</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link ps-0 pb-0">Email</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <h5>Alamat</h5>
                <p>Jl. Senopati No.2, Betro, Kec. Sedati, Kab. Sidoarjo, Jawa Timur 61252</p>
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="footer-bottom pt-3">
          <p>&copy; 2025 SMK Senopati Sedati Sidoarjo</p>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    {{-- Bootstrap --}}
    <script src="{{ asset('assets/static/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- AOS Animation --}}
    <script src="{{ asset('assets/static/aos/aos.js') }}"></script>

    {{-- Swiper JS --}}
    <script src="{{ asset('assets/static/swiper/swiper-bundle.min.js') }}"></script>

    {{-- Senop Script --}}
    <script src="{{ asset('assets/senop/script.js') }}"></script>
  </body>

</html>
