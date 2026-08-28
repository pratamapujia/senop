@extends('admin.layouts.main')

@section('title')
  <title>Tambah Data Galeri</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/quill/quill.snow.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Form Tambah Data Galeri</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('dm-galeri.index') }}">Data Galeri</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Tambah Data
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
            <h5>Data Galeri Sekolah</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-galeri.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- Pastikan ada enctype="multipart/form-data" untuk upload file --}}
        <form action="{{ route('dm-galeri.store') }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">

            {{-- Field Judul --}}
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="judul">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul" value="{{ old('judul') }}">
                @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Kategori --}}
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="kategori">Kategori</label>
                <select class="form-select @error('kategori') is-invalid @enderror" name="kategori">
                  <option value="" disabled {{ old('kategori') ? '' : 'selected' }}>Pilih Kategori</option>
                  <option value="Prestasi" {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                  <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                  <option value="Fasilitas" {{ old('kategori') == 'Fasilitas' ? 'selected' : '' }}>Fasilitas</option>
                  <option value="Ekstrakurikuler" {{ old('kategori') == 'Ekstrakurikuler' ? 'selected' : '' }}>Ekstrakurikuler</option>
                </select>
                @error('kategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Gambar --}}
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="gambar">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" accept="image/*">
                @error('gambar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Konten (Quill) --}}
            <div class="col-12 col-md-6 col-lg-12 mt-3">
              <div class="form-group">
                <label class="form-label" for="deskripsi">Deskripsi</label>

                <!-- Input hidden ini yang akan dikirim ke Controller -->
                <input type="hidden" name="deskripsi" id="input_deskripsi" value="{{ old('deskripsi') }}">

                <!-- Wadah editor Quill -->
                <div id="full" class="@error('deskripsi') is-invalid @enderror">{!! old('deskripsi') !!}</div>

                @error('deskripsi')
                  <div class="invalid-feedback d-block mt-2">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            <div class="col-6 mt-4">
              <button class="btn btn-primary icon icon-left btn-block">
                <i class="fas fa-paper-plane"></i> Simpan
              </button>
            </div>
            <div class="col-6 mt-4">
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

@section('js')
  <script src="{{ asset('assets/admin/extensions/quill/quill.min.js') }}"></script>
  <script>
    var quill = new Quill("#full", {
      bounds: "#full-container .editor",
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
            color: []
          }, {
            background: []
          }],
          [{
            script: "super"
          }, {
            script: "sub"
          }],
          [{
            list: "ordered"
          }, {
            list: "bullet"
          }, {
            indent: "-1"
          }, {
            indent: "+1"
          }],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"],
        ],
      },
      theme: "snow",
    });

    // Sinkronisasi isi Quill ke input tersembunyi
    quill.on('text-change', function(delta, oldDelta, source) {
      let html = quill.root.innerHTML;

      if (html === '<p><br></p>') {
        html = '';
      }

      // Pastikan ID ini sama dengan ID di tag <input type="hidden">
      document.getElementById('input_deskripsi').value = html;
    });
  </script>
@endsection
