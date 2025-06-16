@extends('layouts.main')

@section('title')
  <title>SMK SENOPATI</title>
@endsection

@section('main')
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
              <img src="{{ asset('assets/senop/img/hero.png') }}" data-aos="zoom-out" data-aos-delay="300" alt="Hero Image" class="img-fluid">
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
      <div class="container py-2" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
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
          <div class="col-lg-4 position-relative my-5" data-aos="zoom-out" data-aos-delay="400">
            <div class="agenda-image">
              <img src="assets/senop/img/agenda.png" alt="Profile Image" class="img-fluid">
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/9.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Pentas Seni HUT Senopati</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/8.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Tasyakuran HUT Senopati</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/7.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Pawai Hari Pahlawan</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/1.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Maulid Nabi 1446H</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/2.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Senam Bersama</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/3.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Rutinan Sholat Dhuha</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/4.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Kegiatan Sosial Masyarakat</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-3 py-1">
              <div class="card">
                <img src="{{ asset('assets/senop/img/galeri/5.JPG') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text text-center">Lomba Class Meet</p>
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

  </main>
@endsection
