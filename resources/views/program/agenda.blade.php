@extends('layouts.main')

@section('title')
  <title>Agenda Sekolah</title>
@endsection

@section('main')
  {{-- Page Title --}}
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Agenda</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li class="current">Agenda</li>
        </ol>
      </nav>
    </div>
  </div>
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
            {{-- Pagination --}}
            {{ $agenda->withQueryString()->links('pagination::bootstrap-5') }}
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
