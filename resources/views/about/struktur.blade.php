@extends('layouts.main')

@section('title')
  <title>Struktur Organisasi</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Struktur Organisasi</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Struktur Organisasi</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Struktur Organisasi Sekolah SMK Senopati</p>
    </div>
  </div>
  <div class="container w-100 pb-5" data-aos="fade-up" data-aos-delay="100">
    <div class="pb-4 justify-content-center">
      <div class="th-team team-members">
        @if (empty($kepsek))
          <div class="box-img2">
            <img src="{{ asset('assets/senop/img/none.jpg') }}" alt="">
            <div class="box-content">
              <a href="javascript:void(0)">Tidak Ada Data</a>
              <p class="box-text">Tidak Ada Data
              </p>
            </div>
          </div>
        @else
          <div class="box-img2">
            <img decoding="async" src="{{ Storage::url('guru/' . $kepsek->foto) }}" alt="Kepsek" loading="lazy">
            <div class="box-content">
              <a href="javascript:void(0)">{{ $kepsek->nama }}</a>
              <p class="box-text">{{ $kepsek->jabatan }}
              </p>
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="row gy-4 justify-content-between" data-aos="fade-up" data-aos-delay="200">
      @foreach ($semuaGuru as $data)
        @if (empty($data))
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="th-team team-members">
              <div class="box-img">
                <img src="{{ asset('assets/senop/img/none.jpg') }}" alt="">
                <div class="box-content">
                  <a href="javascript:void(0)">Tidak Ada Data</a>
                  <p class="box-text">Tidak Ada Data
                  </p>
                </div>
              </div>
            </div>
          </div>
        @else
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="th-team team-members">
              <div class="box-img">
                <img src="{{ asset('assets/senop/img/none.jpg') }}" alt="">
                <img decoding="async" src="{{ Storage::url('guru/' . $data->foto) }}" alt="Kepsek" loading="lazy">
                <div class="box-content">
                  <a href="javascript:void(0)">{{ $data->nama }}</a>
                  <p class="box-text">{{ $data->jabatan }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
@endsection
