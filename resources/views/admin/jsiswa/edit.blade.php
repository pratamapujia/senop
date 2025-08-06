@extends('layouts.main')

@section('title')
  <title>Edit Data</title>
@endsection

@section('main')
  <div id="main-content">
    <div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Form Edit Data</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('jsiswa.index') }}">Master Siswa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Form Edit Data
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
              <h5>Master Siswa</h5>
            </div>
            <div class="ms-auto">
              <a href="{{ route('jsiswa.index') }}" class="btn icon icon-left btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('jsiswa.update', $JSiswa->id) }}" class="form" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" placeholder="Masukkan Jurusan" value="{{ old('jurusan', $JSiswa->jurusan) }}">
                  @error('jurusan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="total_siswa">Total Siswa</label>
                  <input type="text" class="form-control @error('total_siswa') is-invalid @enderror" name="total_siswa" placeholder="Total Siswa"
                    value="{{ old('total_siswa', $JSiswa->total_siswa) }}">
                  @error('total_siswa')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-6 mt-2">
                <button class="btn btn-primary icon icon-left btn-block">
                  <i class="fas fa-paper-plane"></i> Update
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
