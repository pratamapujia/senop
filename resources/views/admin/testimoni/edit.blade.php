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
                  <a href="{{ route('testimoni.index') }}">Master Testimoni</a>
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
              <h5>Master Testimoni</h5>
            </div>
            <div class="ms-auto">
              <a href="{{ route('testimoni.index') }}" class="btn icon icon-left btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('testimoni.update', $testimoni->id_testimoni) }}" class="form" method="POST" enctype="multipart/form-data" id="formUpload">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label" for="nama">Nama Alumni</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama Alumni" value="{{ old('nama', $testimoni->nama) }}">
                  @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label" for="credit">Status Alumni</label>
                  <input type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" placeholder="Ex: Staff IT Perusahan A" value="{{ old('credit', $testimoni->credit) }}">
                  @error('credit')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label for="testimoni" class="form-label">Testimoni</label>
                  <textarea class="form-control @error('testimoni') is-invalid @enderror" placeholder="Masukkan Testimoni" id="testimoni" name="testimoni">{{ old('testimoni', $testimoni->testimoni) }}</textarea>
                  @error('testimoni')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label" for="foto">Foto</label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" placeholder="Masukkan Foto" value="{{ old('foto') }}">
                  @error('foto')
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
