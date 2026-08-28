@extends('admin.layouts.main')

@section('title')
  <title>Edit Data Testimoni</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/quill/quill.snow.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Form Edit Data Testimoni</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('dm-testimoni.index') }}">Data Testimoni</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Edit Data
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
            <h5>Data Testimoni Alumni</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-testimoni.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- Pastikan ada enctype="multipart/form-data" untuk upload file --}}
        <form action="{{ route('dm-testimoni.update', $testimoni->id) }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">

            {{-- Field Nama --}}
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama" value="{{ old('nama', $testimoni->nama) }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Jabatan --}}
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="jabatan">Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Masukkan Jabatan" value="{{ old('jabatan', $testimoni->jabatan) }}">
                @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Gambar --}}
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="gambar">Gambar</label>
                <div class="d-flex align-items-top gap-3">

                  <!-- Sisi Kiri: Form Input -->
                  <div class="grow">
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                    @error('gambar')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <small class="text-danger mt-1 d-block">*Biarkan kosong jika tidak ingin mengubah foto.</small>
                  </div>

                  <!-- Sisi Kanan: Preview Foto (Jika ada di database) -->
                  @if (isset($testimoni) && $testimoni->gambar)
                    <div class="shrink-0">
                      <a href="{{ Storage::url('testimoni/' . $testimoni->gambar) }}" target="_blank" title="Lihat Foto Penuh">
                        <img src="{{ Storage::url('testimoni/' . $testimoni->gambar) }}" alt="Preview" class="img-thumbnail shadow-sm rounded" style="height: 70px; object-fit: cover;">
                      </a>
                    </div>
                  @endif

                </div>
              </div>
            </div>

            {{-- Field Konten (Quill) --}}
            <div class="col-12 col-md-6 col-lg-12 mt-3">
              <div class="form-group">
                <label class="form-label" for="testimoni">Testimoni</label>

                <!-- Input hidden ini yang akan dikirim ke Controller -->
                <input type="hidden" name="testimoni" id="input_testimoni" value="{{ old('testimoni', $testimoni->testimoni) }}">

                <!-- Wadah editor Quill -->
                <div id="full" class="@error('testimoni') is-invalid @enderror">{!! old('testimoni', $testimoni->testimoni) !!}</div>

                @error('testimoni')
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
      document.getElementById('input_testimoni').value = html;
    });
  </script>
@endsection
