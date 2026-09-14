@extends('layouts.main')

@section('title')
  <title>Akses Ditolak - SMK Senopati</title>
@endsection

@section('main')
  @include('errors.template', [
      'code' => '403',
      'icon' => 'fa-solid fa-lock',
      'badge' => 'Akses Dibatasi',
      'title' => 'Anda Tidak Memiliki Izin Akses',
      'message' => 'Maaf, Anda tidak memiliki hak akses untuk melihat halaman ini. Silakan kembali ke beranda atau hubungi admin jika ini sebuah kesalahan.',
  ])
@endsection
