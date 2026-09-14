@extends('layouts.main')

@section('title')
  <title>Sedang Pemeliharaan - SMK Senopati</title>
@endsection

@section('main')
  @include('errors.template', [
      'code' => '503',
      'icon' => 'fa-solid fa-screwdriver-wrench',
      'badge' => 'Mohon Tunggu',
      'title' => 'Website Sedang Dalam Pemeliharaan',
      'message' => 'Kami sedang melakukan peningkatan layanan agar website ini menjadi lebih baik. Silakan kembali beberapa saat lagi.',
  ])
@endsection
