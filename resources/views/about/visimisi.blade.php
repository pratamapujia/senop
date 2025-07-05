@extends('layouts.main')

@section('title')
  <title>Visi Misi Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Visi Misi</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Visi Misi</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Visi dan Misi ini menjadi landasan utama dalam pengembangan sekolah.</p>
    </div>
  </div>

  <section class="vm section-vm">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">
      <div class="vm-item">
        <div class="row align-items-center">
          <div class="col-12 py-2">
            <div class="card">
              <div class="header-vm">
                <div class="icon-box-vm">
                  <i class="bi bi-eye-fill"></i>
                </div>
                <h5 class="title">Visi</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Terwujudnya lembaga pendidikan yang mampu meluluskan tenaga kerja yang memiliki karakter, religius, terampil di era digitalisasi, profesional,
                  nasionalisme dan mandiri dalam aspek kehidupan.</p>
              </div>
            </div>
          </div>
          <div class="col-12 py-2">
            <div class="card">
              <div class="header-vm">
                <div class="icon-box-vm">
                  <i class="bi bi-bullseye"></i>
                </div>
                <h5 class="title">Misi</h5>
              </div>
              <div class="card-body">
                <ol class="card-text">
                  <li>Meningkatkan lulusan yang berkarakter dan religius.</li>
                  <li>Menanamkan semangat kedisiplinan "Dwi Warna Purwa Cendekia Wisana" (Menanamkan jiwa dan semangat Merah Putih terlebih dahulu sebelum menjadi cendekiawan).</li>
                  <li>Meningkatkan lulusan yang terampil di era digitalisasi.</li>
                  <li>Meningkatkan lulusan yang siap kerja (Mandiri), profesional, dan mampu bersaing pada pasar bebas.</li>
                  <li>Meningkatkan pendidikan dan pelatihan kejuruan yang adaptif, fleksibel, dan berwawasan global.</li>
                  <li>Menciptakan lulusan yang berjiwa wirausaha sesuai dengan instansi, dunia kerja dan dunia indsutri.</li>
                  <li>Meningkatkan pendidikan dan pelatihan yang berwawasan mutu dan profesional.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
