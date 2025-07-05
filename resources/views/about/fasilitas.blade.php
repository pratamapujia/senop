@extends('layouts.main')

@section('title')
  <title>Fasilitas Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Fasilitas</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Fasilitas</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Senopati memiliki fasilitas yang lengkap, kepoin yuk!</p>
    </div>
  </div>
@endsection
