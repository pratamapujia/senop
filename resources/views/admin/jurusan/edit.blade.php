@extends('admin.layouts.main')

@section('title')
  <title>Edit Data Jurusan</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/quill/quill.snow.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Form Edit Data Jurusan</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dm-jurusan.index') }}">Data Jurusan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
            <h5>Data Jurusan</h5>
          </div>
          <div class="ms-auto">
            <a href="{{ route('dm-jurusan.index') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('dm-jurusan.update', $jurusan->id) }}" class="form" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">

            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="kode_jurusan">Kode Jurusan</label>
                <input type="text" class="form-control @error('kode_jurusan') is-invalid @enderror" name="kode_jurusan" id="kode_jurusan" value="{{ old('kode_jurusan', $jurusan->kode_jurusan) }}">
                @error('kode_jurusan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="nama_jurusan">Nama Jurusan</label>
                <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama_jurusan" id="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}">
                @error('nama_jurusan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label" for="kategori_id">Kategori</label>
                <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
                  <option value="" disabled>Pilih Kategori</option>
                  @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" {{ old('kategori_id', $jurusan->kategori_id) == $item->id ? 'selected' : '' }}>
                      {{ $item->nama }}
                    </option>
                  @endforeach
                </select>
                @error('kategori_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 mt-3">
              <div class="form-group">
                <label class="form-label" for="deskripsi_hero">Deskripsi Hero</label>
                <textarea class="form-control @error('deskripsi_hero') is-invalid @enderror" name="deskripsi_hero" id="deskripsi_hero" rows="3">{{ old('deskripsi_hero', $jurusan->deskripsi_hero) }}</textarea>
                @error('deskripsi_hero')
                  <div class="invalid-feedback d-block mt-2">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 mt-3">
              <div class="form-group">
                <label class="form-label" for="konten">Konten</label>
                <input type="hidden" name="konten" id="input_konten" value="{{ old('konten', $jurusan->konten) }}">
                <div id="editor-konten" class="@error('konten') is-invalid @enderror">{!! old('konten', $jurusan->konten) !!}</div>
                @error('konten')
                  <div class="invalid-feedback d-block mt-2">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 mt-3">
              <div class="form-group">
                <label class="form-label">Prospek Karier</label>
                <div id="peluang-wrapper">
                  @php $peluangLama = old('peluang_kerja', $jurusan->peluang_kerja ?: ['']); @endphp
                  @foreach ($peluangLama as $peluang)
                    <div class="d-flex gap-2 mb-2 peluang-row">
                      <input type="text" name="peluang_kerja[]" class="form-control" value="{{ $peluang }}" placeholder="Contoh: Graphic Designer">
                      <button type="button" class="btn btn-danger btn-remove-peluang"><i class="fas fa-trash"></i></button>
                    </div>
                  @endforeach
                </div>
                <button type="button" id="btn-add-peluang" class="btn btn-sm btn-outline-primary mt-1">
                  <i class="fas fa-plus"></i> Tambah Prospek
                </button>
                @error('peluang_kerja')
                  <div class="text-danger mt-2" style="font-size:13px;">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 mt-3">
              <div class="form-group mb-4 p-4 border border-dashed rounded-3" style="background:#f8f9fa;">
                <label for="foto_galeri" class="fw-bold d-block mb-2">
                  <i class="fas fa-images text-primary me-2"></i> Tambahkan Foto ke Galeri Jurusan (Opsional)
                </label>
                <p class="text-muted mb-3" style="font-size:12px;">
                  Foto baru yang diunggah di sini akan otomatis masuk ke menu Galeri dengan kategori jurusan ini, tanpa menghapus foto yang sudah ada.
                </p>
                <input type="file" name="foto_galeri[]" id="foto_galeri" multiple accept="image/*" class="form-control @error('foto_galeri.*') is-invalid @enderror">
                @error('foto_galeri.*')
                  <div class="invalid-feedback d-block mt-2">{{ $message }}</div>
                @enderror

                @if ($galeriTerkait->count())
                  <p class="fw-bold mt-4 mb-2" style="font-size:13px;">Foto galeri yang sudah terhubung:</p>
                  <div class="d-flex flex-wrap gap-2">
                    @foreach ($galeriTerkait as $foto)
                      <img src="{{ Storage::url('berita/' . $foto->gambar) }}" style="width:80px;height:80px;object-fit:cover;border-radius:8px;">
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <div class="col-6 mt-2">
              <button type="submit" class="btn btn-primary icon icon-left btn-block w-100">
                <i class="fas fa-paper-plane"></i> Update
              </button>
            </div>
            <div class="col-6 mt-2">
              <a href="{{ route('dm-jurusan.index') }}" class="btn btn-secondary icon icon-left btn-block w-100">
                <i class="fas fa-times"></i> Batal
              </a>
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
    var quill = new Quill("#editor-konten", {
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

    quill.on('text-change', function() {
      let html = quill.root.innerHTML;
      if (html === '<p><br></p>') html = '';
      document.getElementById('input_konten').value = html;
    });

    document.querySelector('form').addEventListener('submit', function() {
      document.getElementById('input_konten').value = quill.root.innerHTML;
    });

    document.getElementById('btn-add-peluang').addEventListener('click', function() {
      const wrapper = document.getElementById('peluang-wrapper');
      const row = document.createElement('div');
      row.className = 'd-flex gap-2 mb-2 peluang-row';
      row.innerHTML = `
        <input type="text" name="peluang_kerja[]" class="form-control" placeholder="Contoh: Graphic Designer">
        <button type="button" class="btn btn-danger btn-remove-peluang"><i class="fas fa-trash"></i></button>`;
      wrapper.appendChild(row);
    });

    document.getElementById('peluang-wrapper').addEventListener('click', function(e) {
      const btn = e.target.closest('.btn-remove-peluang');
      if (!btn) return;
      const rows = document.querySelectorAll('.peluang-row');
      if (rows.length > 1) {
        btn.closest('.peluang-row').remove();
      } else {
        btn.closest('.peluang-row').querySelector('input').value = '';
      }
    });

    document.querySelector('form').addEventListener('submit', function(e) {
      // 1. Sinkronisasi akhir Quill sebelum submit
      let html = quill.root.innerHTML;
      if (html === '<p><br></p>') html = '';
      document.getElementById('input_konten').value = html;

      // 2. Cek validasi form bawaan HTML5 (misal: required)
      if (!this.checkValidity()) {
        return; // Jika ada yang kosong, batalkan loading dan biarkan browser memberi peringatan
      }

      // 3. Tampilkan SweetAlert Loading
      Swal.fire({
        title: 'Menyimpan Data...',
        text: 'Mohon tunggu, sedang memproses gambar dan konten.',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        didOpen: () => {
          Swal.showLoading();
        }
      });
    });
  </script>
@endsection
