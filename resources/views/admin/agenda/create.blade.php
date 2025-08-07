@extends('admin.layouts.main')

@section('title')
  <title>Form Tambah Data</title>
@endsection

@section('main')
  <div id="main-content">
    <div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Form Tambah Data</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('agenda.index') }}">Master Agenda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Form Tambah Data
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="flash-data" data-gagal="{{ Session::get('gagal') }}"></div>
      <div class="card">
        <div class="card-header">
          <div class="media d-flex align-items-center">
            <div class="me-3">
              <h5>Master Agenda</h5>
            </div>
            <div class="ms-auto">
              <a href="{{ route('agenda.index') }}" class="btn icon icon-left btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('agenda.store') }}" class="form" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label" for="nama_agenda">Nama Agenda</label>
                  <input type="text" class="form-control @error('nama_agenda') is-invalid @enderror" name="nama_agenda" placeholder="Masukkan Nama Agenda" value="{{ old('nama_agenda') }}">
                  @error('nama_agenda')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label" for="tanggal">Tanggal Agenda</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Masukkan Tanggal Agenda" value="{{ old('tanggal') }}">
                  @error('tanggal')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label" for="keterangan">Keterangan</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="ex: 10-15 Juni 2023" value="{{ old('keterangan') }}">
                  @error('keterangan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-6 mt-2">
                <button class="btn btn-primary icon icon-left btn-block">
                  <i class="fas fa-paper-plane"></i> Simpan
                </button>
              </div>
              <div class="col-6 mt-2">
                <button type="reset" class="btn btn-secondary icon icon-left btn-block">
                  <i class="fas fa-sync"></i> Reset
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
