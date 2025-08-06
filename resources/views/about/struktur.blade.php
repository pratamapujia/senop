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
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Beranda</a></li>
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
  <div class="container w-100 pb-5">
    <div class="row pb-4 justify-content-center">
      <div class="col-3">
        <div class="th-team team-members">
          <div class="box-img">
            <img decoding="async" src="{{ asset('assets/static/images/faces/1.jpg') }}" alt="team-1-1">
          </div>
          <div class="box-content">
            <a href="javascript:void(0)">Dr.
              Malcolm Function</a>
            <p class="box-text">Kepala Sekolah
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row gy-4 justify-content-between">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="th-team team-members">
          <div class="box-img">
            <img decoding="async" src="{{ asset('assets/static/images/faces/1.jpg') }}" alt="team-1-1">
          </div>
          <div class="box-content">
            <a href="javascript:void(0)">Dr.
              Malcolm Function</a>
            <p class="box-text">Neurologist
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="th-team team-members">
          <div class="box-img">
            <img decoding="async" src="{{ asset('assets/static/images/faces/2.jpg') }}" alt="team-2">
          </div>
          <div class="box-content">
            <a href="javascript:void(0)">Dr. Malcolm Function</a>
            <p class="box-text">Neurologist
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 ">
        <div class="th-team team-members">
          <div class="box-img">
            <img decoding="async" src="{{ asset('assets/static/images/faces/3.jpg') }}" alt="team-3">
          </div>
          <div class="box-content">
            <a href="javascript:void(0)">Dr. Malcolm Function</a>
            <p class="box-text">Neurologist
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 ">
        <div class="th-team team-members">
          <div class="box-img">
            <img decoding="async" src="{{ asset('assets/static/images/faces/4.jpg') }}" alt="team-3">
          </div>
          <div class="box-content">
            <a href="javascript:void(0)">Dr. Malcolm Function</a>
            <p class="box-text">Neurologist
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
