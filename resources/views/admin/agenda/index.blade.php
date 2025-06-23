@extends('admin.layouts.main')

@section('title')
  <title>Agenda</title>
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
            <h3>Master Agenda</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Master Agenda</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('agenda.create') }}" class="btn icon icon-left btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Agenda</th>
                  <th>Keterangan</th>
                  <th data-sortable="false">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($agenda as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_agenda }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                      <a href="{{ route('agenda.edit', $data->id_agenda) }}" class="btn icon icon-left btn-sm btn-warning">
                        <li class="fas fa-edit"></li> Edit
                      </a>
                      <form action="{{ route('agenda.destroy', $data->id_agenda) }}" method="POST" class="d-inline">
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
