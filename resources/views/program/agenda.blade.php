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
  <section class="agenda">
    <div class="container">
      <div class="agenda-content py-5">
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
      </div>

      {{-- Pagination --}}
      {{ $agenda->withQueryString()->links('pagination::bootstrap-5') }}

    </div>
  </section>
@endsection
