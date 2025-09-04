@extends('admin.layouts.main')

@section('title')
  <title>Guru dan Staff</title>
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
            <h3>Master Guru dan Staff</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Master Guru dan Staff</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('guru.create') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th data-sortable="false">Foto</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th data-sortable="false">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($guru as $data)
                  @php
                    $path = Storage::url('guru/' . $data->foto);
                  @endphp
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ url($path) }}" width="100" alt="{{ $data->foto }}"></td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>
                      <a href="{{ route('guru.edit', $data->id) }}" class="btn icon icon-left btn-sm btn-warning">
                        <li class="fas fa-edit"></li> Edit
                      </a>
                      <form action="{{ route('guru.destroy', $data->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
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
@endsection
@section('script')
  <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/static/js/pages/simple-datatables.js') }}"></script>
@endsection
