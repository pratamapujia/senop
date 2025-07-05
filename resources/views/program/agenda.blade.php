@extends('layouts.main')

@section('title')
  <title>Agenda Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title position-relative">
    <div class="breadcrumbs">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Beranda</a></li>
          <li class="breadcrumb-item active current">Agenda</li>
        </ol>
      </nav>
    </div>

    <div class="title-wrapper">
      <h2>Agenda</h2>
      <div class="title-shape">
        <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="3"></path>
        </svg>
      </div>
      <p>Agenda Sekolah SMK Senopati selama beberapa hari kedepan.</p>
    </div>
  </div>

  {{-- Main --}}
  <section id="agenda" class="agenda light-background">
    <div class="container py-2" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
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
            {{-- Pagination --}}
            {{ $agenda->withQueryString()->links('vendor.pagination.mypagination') }}
          </div>
        </div>
        <div class="col-lg-4 position-relative my-5" data-aos="zoom-out" data-aos-delay="400">
          <div class="agenda-image">
            <img src="{{ asset('assets/senop/img/agenda.png') }}" alt="Profile Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
