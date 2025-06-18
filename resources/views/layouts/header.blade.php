{{-- Header --}}
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('assets/senop/img/logo/smksenopati.png') }}" class="img-fluid" alt="">
      {{-- <h1 class="sitename">Senopati</h1> --}}
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/">Beranda</a></li>
        <li class="dropdown"><a href="#">Tentang Kami <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('about') }}">Profil Sekolah</a></li>
            <li><a href="{{ route('visimisi') }}">Visi dan Misi</a></li>
            <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
            <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
            <li><a href="{{ route('prestasi') }}">Prestasi</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#">Program <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('profjur') }}">Profil Jurusan</a></li>
            <li><a href="{{ route('agenda') }}">Agenda</a></li>
            <li><a href="{{ route('galeri') }}">Galeri</a></li>
            <li><a href="{{ route('ekskul') }}">Ekstrakurikuler</a></li>
            <li><a href="{{ route('berita') }}">Berita Terbaru</a></li>
          </ul>
        </li>
        <li><a href="https://virtualsekolah.id/tour/viewer/index.php?code=c9f0f895fb98ab9159f51fd0297e236d" target="_blank">Virtual Tour</a></li>
        <li><a href="{{ route('ppdb') }}">PPDB</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <div class="header-social-links">
      <a href="https://instagram.com/smk_senopati/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://tiktok.com/@smk_senopati/" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
    </div>
  </div>
</header>
