@extends('admin.layouts.main')

@section('title')
  <title>Data Guru dan Staff</title>

  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/simple-datatables/style.css') }}">

  <link rel="stylesheet" crossorigin href="{{ asset('assets/admin/compiled/css/table-datatable.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Data Guru & Staff</h3>
          <p class="text-subtitle text-muted">Data Master untuk struktur organisasi</p>
        </div>
      </div>
    </div>
    <section class="section">
      {{-- Sweetalert --}}
      <div class="flash-data" data-success="{{ Session::get('success') }}" data-error="{{ Session::get('error') }}"></div>
      <div class="card">
        <div class="card-header d-flex">
          <h5 class="card-title">
            Tabel Data Guru & Staff
          </h5>
          <div class="ms-auto">
            <a href="{{ route('dm-struktur.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($struktur as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img src="{{ Storage::url('struktur/' . $item->foto) }}" alt="Foto" class="img-thumbnail" width="50">
                  </td>
                  <td>{{ $item->nama_lengkap }}</td>
                  <td>{{ $item->jabatan }}</td>
                  <td>
                    @if ($item->status == 'aktif')
                      <span class="badge bg-success">Aktif</span>
                    @else
                      <span class="badge bg-danger">Tidak Aktif</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('dm-struktur.edit', $item->id) }}" class="btn icon icon-left btn-primary"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                    <button type="button" class="btn icon icon-left btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                      <i class="fa-regular fa-trash-can"></i> Hapus
                    </button>
                  </td>
                </tr>

                {{-- Modal Hapus Data --}}
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow">

                      <!-- Tombol Close di pojok kanan atas -->
                      <div class="modal-header border-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body text-center pb-4 px-4">
                        <!-- Ikon Peringatan / Trash (Menggunakan SVG bawaan Bootstrap) -->
                        <div class="text-danger mb-3">
                          <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>

                        <!-- Judul & Informasi Data -->
                        <h4 class="mb-2" id="deleteModalLabel{{ $item->id }}">Hapus Data?</h4>
                        <p class="text-muted mb-0">
                          Apakah Anda yakin ingin menghapus data <strong>{{ $item->nama_lengkap }}</strong>? <br>
                          <span class="text-danger" style="font-size: 0.9em;">Tindakan ini permanen dan tidak dapat dibatalkan.</span>
                        </p>
                      </div>

                      <!-- Footer Tombol -->
                      <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>

                        <form action="{{ route('dm-struktur.destroy', $item->id) }}" method="POST" class="m-0">
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
@endsection

@section('js')
  <script src="{{ asset('assets/admin/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/admin/static/js/pages/simple-datatables.js') }}"></script>
@endsection
