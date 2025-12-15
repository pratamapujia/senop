@extends('admin.layouts.main')

@section('title')
  <title>Galeri</title>
  <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}">
  <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/table-datatable.css') }}">
@endsection

@section('main')
  <div id="main-content">

    {{-- Alert --}}
    <div class="flash-data" data-berhasil="{{ Session::get('berhasil') }}"></div>
    <div class="flash-data" data-gagal="{{ Session::get('gagal') }}"></div>
    {{-- End Alert --}}

    <div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Master Galeri</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Master Galeri</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('galeri.create') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Foto</th>
                  <th data-sortable="false">Foto</th>
                  <th data-sortable="false">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($galeri as $data)
                  {{-- @php
                    $path = Storage::url('galeri/' . $data->foto);
                  @endphp --}}
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul_foto }}</td>
                    <td><img src="{{ $data->foto }}" width="100" alt="{{ $data->judul_foto }}"></td>
                    <td>
                      <a href="{{ route('galeri.edit', $data->id_galeri) }}" class="btn icon icon-left btn-sm btn-warning">
                        <li class="fas fa-edit"></li> Edit
                      </a>
                      <form action="{{ route('galeri.destroy', $data->id_galeri) }}" method="POST" class="d-inline formDelete">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn icon icon-left btn-danger btn-sm btn-delete">
                          <li class="fas fa-trash"></li> Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script>
    const deleteForms = document.querySelectorAll('.formDelete');
    deleteForms.forEach(form => {
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        const btnDelete = this.querySelector('.btn-delete');
        const btnHapusLoading = this.querySelector('.btn-hapus-loading');
        btnDelete.style.display = 'none';
        btnHapusLoading.style.display = 'inline-block';
      })
    })
  </script>
@endsection
@section('script')
  <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/static/js/pages/simple-datatables.js') }}"></script>
@endsection
