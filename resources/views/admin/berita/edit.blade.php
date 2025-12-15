@extends('admin.layouts.main')

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
                  <a href="{{ route('berita.index') }}">Master Berita</a>
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
              <h5>Master Berita</h5>
            </div>
            <div class="ms-auto">
              <a href="{{ route('berita.index') }}" class="btn icon icon-left btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('berita.update', $berita->id_berita) }}" class="form" method="POST" enctype="multipart/form-data" id="formUpload">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="form-group">
                  <label class="form-label" for="judul">Judul Berita</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul Berita" value="{{ old('judul', $berita->judul) }}">
                  @error('judul')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-3 col-lg-4">
                <div class="form-group">
                  <label class="form-label" for="penulis">Penulis</label>
                  <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" placeholder="Masukkan Penulis" value="{{ old('penulis', $berita->penulis) }}">
                  @error('penulis')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-3 col-lg-4">
                <div class="form-group">
                  <label class="form-label" for="tanggal">Tanggal Terbit</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Masukkan Tanggal" value="{{ old('tanggal', $berita->tanggal) }}">
                  @error('tanggal')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label" for="berita">Isi Berita</label>
                  <textarea class="@error('berita') is-invalid @enderror" id="default" name="berita">{{ old('berita', $berita->berita) }}</textarea>
                  @error('berita')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="form-label" for="foto">Foto Berita</label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" placeholder="Masukkan Foto" value="{{ old('foto') }}">
                  @error('foto')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label class="form-label" for="credit">Credit</label>
                  <input type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" placeholder="Masukkan link sumber berita bila ada"
                    value="{{ old('credit', $berita->credit) }}">
                  @error('credit')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-6 mt-2">
                <button type="submit" id="btnSimpan" class="btn btn-primary icon icon-left btn-block">
                  <i class="fas fa-paper-plane"></i> Simpan
                </button>
                <button type="button" id="btnLoading" class="btn btn-primary icon icon-left btn-block" style="display: none" disabled>
                  <i class="fas fa-spinner fa-spin"></i> Mengupload...
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
@section('script')
  <script src="{{ asset('assets/extensions/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/static/js/pages/tinymce.js') }}"></script>
@endsection
