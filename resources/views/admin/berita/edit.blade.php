@extends('admin.layouts.main')

@section('title')
  <title>Edit Data Berita</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/quill/quill.snow.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Form Edit Data Berita</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('dm-berita.index') }}">Data Berita</a>
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
            <h5>Data Berita Sekolah</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-berita.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('dm-berita.update', $berita->id) }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">

            {{-- Field Judul --}}
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="judul">Judul Berita</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul" value="{{ old('judul', $berita->judul) }}">
                @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Kategori --}}
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="kategori">Kategori</label>
                <select class="form-select @error('kategori') is-invalid @enderror" name="kategori">
                  <option value="" disabled {{ old('kategori', $berita->kategori) ? '' : 'selected' }}>Pilih Kategori</option>
                  <option value="Prestasi" {{ old('kategori', $berita->kategori) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                  <option value="Agenda" {{ old('kategori', $berita->kategori) == 'Agenda' ? 'selected' : '' }}>Agenda</option>
                  <option value="Artikel" {{ old('kategori', $berita->kategori) == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                  <option value="Pengumuman" {{ old('kategori', $berita->kategori) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                  <option value="Ekskul" {{ old('kategori', $berita->kategori) == 'Ekskul' ? 'selected' : '' }}>Ekskul</option>
                </select>
                @error('kategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="status">Status Berita</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status">
                  <option value="draft" {{ old('status', $berita->status) == 'draft' ? 'selected' : '' }}>Draft (Konsep)</option>
                  <option value="review" {{ old('status', $berita->status) == 'review' ? 'selected' : '' }}>Menunggu Review</option>
                  <option value="published" {{ old('status', $berita->status) == 'published' ? 'selected' : '' }}>Publish (Tayang)</option>
                </select>
                @error('status')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            {{-- Field Gambar --}}
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="gambar">Gambar Thumbnail</label>
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
                  @if (isset($berita) && $berita->gambar)
                    <div class="shrink-0">
                      <a href="{{ Storage::url('berita/' . $berita->gambar) }}" target="_blank" title="Lihat Foto Penuh">
                        <img src="{{ Storage::url('berita/' . $berita->gambar) }}" alt="Preview" class="img-thumbnail shadow-sm rounded" style="height: 70px; object-fit: cover;">
                      </a>
                    </div>
                  @endif

                </div>
              </div>
            </div>

            {{-- Field Konten (Quill) --}}
            <div class="col-12 col-md-6 col-lg-12 mt-3">
              <div class="form-group">
                <label class="form-label" for="konten">Isi Berita</label>

                <!-- Input hidden ini yang akan dikirim ke Controller -->
                <input type="hidden" name="konten" id="input_konten" value="{{ old('konten', $berita->konten) }}">

                <!-- Wadah editor Quill -->
                <div id="full" class="@error('konten') is-invalid @enderror">{!! old('konten', $berita->konten) !!}</div>

                @error('konten')
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
      document.getElementById('input_konten').value = html;
    });
  </script>
@endsection
