@extends('layouts.main')

@section('title', '500 Gangguan Server')

@section('main')
  @include('errors.template', [
      'code' => '500',
      'icon' => 'fa-solid fa-triangle-exclamation',
      'badge' => 'Gangguan Server',
      'title' => 'Terjadi Kesalahan di Sisi Server',
      'message' => 'Mohon maaf, sedang ada gangguan teknis di server kami. Tim kami sudah diberi tahu dan sedang menanganinya. Silakan coba beberapa saat lagi.',
  ])
@endsection
