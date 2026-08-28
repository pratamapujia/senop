@extends('admin.layouts.main')

@section('title')
  <title>Data Galeri</title>

  <link rel="stylesheet" href="{{ asset('assets/admin/extensions/simple-datatables/style.css') }}">

  <link rel="stylesheet" crossorigin href="{{ asset('assets/admin/compiled/css/table-datatable.css') }}">
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Data Galeri</h3>
          <p class="text-subtitle text-muted">Data Master untuk galeri terkini</p>
        </div>
      </div>
    </div>
    <section class="section">
      {{-- Sweetalert --}}
      <div class="flash-data" data-success="{{ Session::get('success') }}" data-error="{{ Session::get('error') }}"></div>
      <div class="card">
        <div class="card-header d-flex">
          <h5 class="card-title">
            Tabel Data Galeri
          </h5>
          <div class="ms-auto">
            <a href="{{ route('dm-galeri.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th data-sortable="false">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($galeri as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>

                  {{-- Gambar Thumbnail --}}
                  <td>
                    @if ($item->gambar)
                      <img src="{{ Storage::url('berita/' . $item->gambar) }}" alt="Gambar galeri" width="80" class="rounded shadow-sm" style="object-fit: cover; height: 60px;">
                    @else
                      <span class="text-muted" style="font-size: 0.85rem;"><i class="fa-solid fa-image text-light"></i> Kosong</span>
                    @endif
                  </td>

                  <td>
                    <span class="font-bold">{{ $item->judul }}</span>
                  </td>

                  <td>
                    <span class="badge bg-light-primary text-primary">{{ $item->kategori }}</span>
                  </td>

                  <td title="{{ strip_tags($item->deskripsi) }}" style="cursor: help;">
                    {{ Str::limit(strip_tags($item->deskripsi), 30) }}
                  </td>

                  {{-- Kolom Aksi --}}
                  <td class="text-nowrap">
                    <a href="{{ route('dm-galeri.edit', $item->id) }}" class="btn btn-sm icon icon-left btn-primary">
                      <i class="fa-regular fa-pen-to-square"></i> Edit
                    </a>

                    <button type="button" class="btn btn-sm icon icon-left btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
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
                        <!-- Ikon Peringatan -->
                        <div class="text-danger mb-3">
                          <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>

                        <!-- Judul & Informasi Data -->
                        <h4 class="mb-2" id="deleteModalLabel{{ $item->id }}">Hapus Data?</h4>
                        <p class="text-muted mb-0">
                          Apakah Anda yakin ingin menghapus galeri <strong>{{ $item->judul }}</strong>? <br>
                          <span class="text-danger" style="font-size: 0.9em;">Tindakan ini permanen dan tidak dapat dibatalkan.</span>
                        </p>
                      </div>

                      <!-- Footer Tombol -->
                      <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>

                        <form action="{{ route('dm-galeri.destroy', $item->id) }}" method="POST" class="m-0">
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
