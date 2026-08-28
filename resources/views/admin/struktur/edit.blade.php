@extends('admin.layouts.main')

@section('title')
  <title>Form Edit Data</title>
@endsection

@section('main')
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
                <a href="{{ route('dm-struktur.index') }}">Data Guru dan Staff</a>
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
    <div class="flash-data" data-error="{{ Session::get('error') }}"></div>
    <div class="card">
      <div class="card-header">
        <div class="media d-flex align-items-center">
          <div class="me-3">
            <h5>Data Guru dan Staff</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-struktur.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('dm-struktur.update', $struktur->id) }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" placeholder="Masukkan Nama Lengkap"
                  value="{{ old('nama_lengkap', $struktur->nama_lengkap) }}">
                @error('nama_lengkap')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="form-label" for="jabatan">Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Masukkan Jabatan" value="{{ old('jabatan', $struktur->jabatan) }}">
                @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="form-label" for="foto">Foto</label>
                <div class="d-flex align-items-top gap-3">

                  <!-- Sisi Kiri: Form Input -->
                  <div class="grow">
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto">
                    @error('foto')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <small class="text-danger mt-1 d-block">*Biarkan kosong jika tidak ingin mengubah foto.</small>
                  </div>

                  <!-- Sisi Kanan: Preview Foto (Jika ada di database) -->
                  @if (isset($struktur) && $struktur->foto)
                    <div class="shrink-0">
                      <a href="{{ Storage::url('struktur/' . $struktur->foto) }}" target="_blank" title="Lihat Foto Penuh">
                        <img src="{{ Storage::url('struktur/' . $struktur->foto) }}" alt="Preview" class="img-thumbnail shadow-sm rounded" style="width: 70px; height: 70px; object-fit: cover;">
                      </a>
                    </div>
                  @endif

                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="form-label d-block">Status</label>
                <input type="hidden" name="status" value="non-aktif">
                <div class="form-check form-switch mt-2">
                  <input class="form-check-input @error('status') is-invalid @enderror" type="checkbox" role="switch" id="statusSwitch" name="status" value="aktif"
                    {{ old('status', $struktur->status ?? '') == 'aktif' ? 'checked' : '' }} style="transform: scale(1.3); margin-left: -2em;">
                  <label class="form-check-label ms-2" for="statusSwitch" style="padding-top: 2px;">
                    Aktif
                  </label>
                </div>
                @error('status')
                  <div class="invalid-feedback d-block">
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
@endsection
