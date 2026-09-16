@extends('admin.layouts.main')

@section('title')
  <title>Data SPMB</title>
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Data SPMB</h3>
          <p class="text-subtitle text-muted">Data Master untuk SPMB</p>
        </div>
      </div>
    </div>

    <section class="section">
      {{-- Sweetalert --}}
      <div class="flash-data" data-success="{{ Session::get('success') }}" data-error="{{ Session::get('error') }}"></div>

      <div class="row">
        <div class="col-12 col-lg-7">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">
                {{ $spmb ? 'Edit Data SPMB' : 'Tambah Data SPMB' }}
              </h5>
            </div>
            <div class="card-body">
              <form action="{{ route('spmb.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                  <label for="nama" class="form-label">Nama / Judul SPMB</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Contoh: SPMB 2026/2027"
                    value="{{ old('nama', $spmb->nama ?? '') }}">
                  @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3">
                  <label for="kontak_display" class="form-label">No Telepon / WhatsApp</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light fw-bold">+62</span>
                    <input type="text" class="form-control @error('kontak') is-invalid @enderror" name="kontak_display" id="kontak_display" placeholder="83xxxxxxxxx" inputmode="numeric"
                      maxlength="13" value="{{ old('kontak') ? ltrim(old('kontak'), '62') : ($spmb ? substr($spmb->kontak, 2) : '') }}">
                    <input type="hidden" name="kontak" id="kontak_hidden" value="{{ old('kontak', $spmb->kontak ?? '') }}">
                  </div>
                  @error('kontak')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                  <small class="text-muted">Contoh: 83812345678 (tanpa angka 0 di depan)</small>
                </div>

                <div class="form-group mb-4">
                  <label class="form-label" for="gambar">Poster SPMB</label>
                  <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" accept="image/*">
                  @error('gambar')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                  @if ($spmb && $spmb->gambar)
                    <small class="text-muted d-block mt-1">*Biarkan kosong jika tidak ingin mengubah poster.</small>
                  @endif
                </div>

                <button type="submit" class="btn btn-primary icon icon-left">
                  <i class="fas fa-save"></i> {{ $spmb ? 'Simpan Perubahan' : 'Simpan Data' }}
                </button>

                @if ($spmb)
                  <button type="button" class="btn btn-outline-danger icon icon-left ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fa-regular fa-trash-can"></i> Hapus Data
                  </button>
                @endif
              </form>
            </div>
          </div>
        </div>

        {{-- Preview Poster --}}
        <div class="col-12 col-lg-5">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Preview Poster</h5>
            </div>
            <div class="card-body text-center">
              @if ($spmb && $spmb->gambar)
                <img src="{{ asset('storage/spmb/' . $spmb->gambar) }}" alt="{{ $spmb->nama }}" class="img-fluid rounded shadow-sm" style="max-height: 500px; object-fit: cover;">
              @else
                <div class="py-5 text-muted">
                  <i class="fas fa-image fa-3x mb-3 d-block"></i>
                  Belum ada poster yang diunggah.
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  {{-- Modal Hapus Data (hanya muncul kalau data sudah ada) --}}
  @if ($spmb)
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
          <div class="modal-header border-0 pb-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center pb-4 px-4">
            <div class="text-danger mb-3">
              <i class="fas fa-exclamation-triangle fa-3x"></i>
            </div>
            <h4 class="mb-2" id="deleteModalLabel">Hapus Data?</h4>
            <p class="text-muted mb-0">
              Apakah Anda yakin ingin menghapus data <strong>{{ $spmb->nama }}</strong>? <br>
              <span class="text-danger" style="font-size: 0.9em;">Tindakan ini permanen dan tidak dapat dibatalkan.</span>
            </p>
          </div>
          <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
            <form action="{{ route('spmb.destroy', $spmb->id) }}" method="POST" class="m-0">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger px-4">Ya, Hapus Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection

@section('js')
  <script>
    // Loading indicator saat submit
    document.querySelectorAll('form').forEach(function(form) {
      form.addEventListener('submit', function() {
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
    });

    // Gabungkan input nomor telepon jadi format 62xxxxx
    function bersihkanNomor(value) {
      let angka = value.replace(/\D/g, '');
      if (angka.startsWith('0')) angka = angka.substring(1);
      if (angka.startsWith('62')) angka = angka.substring(2);
      return angka;
    }

    const kontakDisplay = document.getElementById('kontak_display');
    const kontakHidden = document.getElementById('kontak_hidden');

    if (kontakDisplay) {
      kontakDisplay.addEventListener('input', function() {
        const bersih = bersihkanNomor(this.value);
        this.value = bersih;
        kontakHidden.value = bersih ? '62' + bersih : '';
      });
    }
  </script>
@endsection
