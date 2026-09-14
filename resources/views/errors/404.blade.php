@extends('layouts.main')

@section('title')
  <title>Halaman Tidak Ditemukan - SMK Senopati</title>
@endsection

@section('main')
  @include('errors.template', [
      'code' => '404',
      'icon' => 'fa-solid fa-map-signs',
      'badge' => 'Oops!',
      'title' => 'Halaman yang Anda Cari Tidak Ditemukan',
      'message' => 'Sepertinya halaman ini sudah dipindahkan, dihapus, atau alamatnya salah ketik. Mari kembali ke halaman utama untuk melanjutkan.',
  ])
@endsection
