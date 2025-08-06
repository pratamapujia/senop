@extends('admin.layouts.main')

@section('title')
  <title>Dashboard</title>
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Dashboard Admin Senop</h3>
          <p class="text-subtitle text-muted">Ini adalah halaman admin</p>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Hallo, Selamat Datang <span class="text-primary">{{ Auth::user()->name }}</span></h4>
        </div>
        <div class="card-body">
          <p>Ini adalah halaman dimana admin dapat <code>menambahkan</code>, <code>mengedit</code> dan <code>menghapus</code> data yang nantinya akan ditampilkan di halaman utama</p>
        </div>
      </div>
    </section>
  </div>
@endsection
