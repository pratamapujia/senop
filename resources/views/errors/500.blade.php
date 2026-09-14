@extends('layouts.main')

@section('title')
  <title>Terjadi Kesalahan - SMK Senopati</title>
@endsection

@section('main')
  @include('errors.template', [
      'code' => '500',
      'icon' => 'fa-solid fa-triangle-exclamation',
      'badge' => 'Gangguan Server',
      'title' => 'Terjadi Kesalahan di Sisi Server',
      'message' => 'Mohon maaf, sedang ada gangguan teknis di server kami. Tim kami sudah diberi tahu dan sedang menanganinya. Silakan coba beberapa saat lagi.',
  ])
@endsection
