@extends('admin.layouts.main')

@section('title')
  <title>Form Tambah Data</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/quill/quill.snow.css') }}">
@endsection

@section('main')
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
                <a href="{{ route('dm-agenda.index') }}">Data Agenda</a>
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
    <div class="flash-data" data-error="{{ Session::get('error') }}"></div>
    <div class="card">
      <div class="card-header">
        <div class="media d-flex align-items-center">
          <div class="me-3">
            <h5>Data Guru dan Staff</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-agenda.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('dm-agenda.store') }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
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
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="tempat">Tempat</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" placeholder="Masukkan Tempat" value="{{ old('tempat') }}">
                @error('tempat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="tanggal">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">
                @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-12">
              <div class="form-group">
                <label class="form-label" for="deskripsi">Deskripsi</label>

                <!-- Input hidden ini yang akan dikirim ke Controller -->
                <input type="hidden" name="deskripsi" id="input_deskripsi" value="{{ old('deskripsi') }}">

                <!-- Wadah editor Quill -->
                <!-- Kita cetak value-nya di sini agar saat edit/error, teksnya kembali muncul -->
                <div id="full" class="@error('deskripsi') is-invalid @enderror">{!! old('deskripsi') !!}</div>

                @error('deskripsi')
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
            },
            {
              list: "bullet"
            },
            {
              indent: "-1"
            },
            {
              indent: "+1"
            },
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"],
        ],
      },
      theme: "snow",
    });

    // Sinkronisasi isi Quill ke input tersembunyi setiap kali ada perubahan teks
    quill.on('text-change', function(delta, oldDelta, source) {
      // Mengambil isi HTML dari editor
      let html = quill.root.innerHTML;

      // Quill secara default menaruh <p><br></p> jika editor kosong.
      // Kita kosongkan saja agar validasi 'required' di Laravel bisa berfungsi dengan akurat.
      if (html === '<p><br></p>') {
        html = '';
      }

      // Masukkan ke input tersembunyi
      document.getElementById('input_deskripsi').value = html;
    });
  </script>
@endsection
