{{-- Header --}}
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('assets/senop/img/logo/smksenopati.png') }}" class="img-fluid" alt="">
      {{-- <h1 class="sitename">Senopati</h1> --}}
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
