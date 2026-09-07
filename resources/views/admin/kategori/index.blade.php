@extends('admin.layouts.main')

@section('title')
  <title>Data Kategori</title>

  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/simple-datatables/style.css') }}">
  <link rel="stylesheet" crossorigin href="{{ asset('assets/admin/compiled/css/table-datatable.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Data Kategori</h3>
          <p class="text-subtitle text-muted">Data Master untuk kategori berita dan galeri</p>
        </div>
      </div>
    </div>
    <section class="section">
      {{-- Sweetalert --}}
      <div class="flash-data" data-success="{{ Session::get('success') }}" data-error="{{ Session::get('error') }}"></div>
      <div class="card">
        <div class="card-header d-flex">
          <h5 class="card-title">
            Tabel Data Kategori
          </h5>
          <div class="ms-auto">
            {{-- Tombol Tambah diganti menjadi pemicu Modal --}}
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
              <i class="fas fa-plus"></i> Tambah Data
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th width="25%" data-sortable="false">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->slug }}</td>
                  <td>
                    {{-- Tombol Edit menggunakan Modal --}}
                    <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                      <i class="fa-regular fa-pen-to-square"></i> Edit
                    </button>

                    {{-- Tombol Hapus[cite: 5] --}}
                    <button type="button" class="btn icon icon-left btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                      <i class="fa-regular fa-trash-can"></i> Hapus
                    </button>
                  </td>
                </tr>

                {{-- Modal Edit Data --}}
                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{ route('dm-kategori.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body pb-0">
                          <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama" value="{{ $item->nama }}" required placeholder="Contoh: Prestasi">
                          </div>
                          {{-- Note: Slug biasanya di-generate otomatis di Controller, tidak perlu diinput manual --}}
                        </div>
                        <div class="modal-footer border-0 pt-0">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                {{-- Modal Hapus Data (Dipertahankan dari source Anda)[cite: 5] --}}
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow">
                      <div class="modal-header border-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center pb-4 px-4">
                        <div class="text-danger mb-3">
                          <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>
                        <h4 class="mb-2" id="deleteModalLabel{{ $item->id }}">Hapus Data?</h4>
                        <p class="text-muted mb-0">
                          Apakah Anda yakin ingin menghapus kategori <strong>{{ $item->nama }}</strong>? <br>
                          <span class="text-danger" style="font-size: 0.9em;">Tindakan ini permanen dan tidak dapat dibatalkan.</span>
                        </p>
                      </div>
                      <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                        <form action="{{ route('dm-kategori.destroy', $item->id) }}" method="POST" class="m-0">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger px-4">Ya, Hapus Data</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  {{-- Modal Tambah Data (Berada di luar perulangan foreach) --}}
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Tambah Kategori Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('dm-kategori.store') }}" method="POST">
          @csrf
          <div class="modal-body pb-0">
            <div class="form-group mb-3">
              <label for="nama" class="form-label">Nama Kategori</label>
              <input type="text" class="form-control" name="nama" required placeholder="Masukkan nama kategori (Contoh: Kegiatan, Prestasi, dll.)">
              <small class="text-muted">Slug akan dibuat otomatis berdasarkan nama kategori.</small>
            </div>
          </div>
          <div class="modal-footer border-0 pt-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('assets/admin/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/admin/static/js/pages/simple-datatables.js') }}"></script>
@endsection
