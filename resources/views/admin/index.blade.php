@extends('admin.layouts.main')

@section('title')
  <title>Dashboard</title>
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Dashboard</h3>
          <p class="text-subtitle text-muted">Ringkasan konten website SMK Senopati</p>
        </div>
      </div>
    </div>

    <section class="section">

      {{-- KARTU STATISTIK --}}
      <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body px-4 py-4-5">
              <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                  <div class="stats-icon purple mb-2">
                    <i class="fas fa-newspaper"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="text-muted font-semibold">Total Berita</h6>
                  <h6 class="font-extrabold mb-0">{{ $totalBerita }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body px-4 py-4-5">
              <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                  <div class="stats-icon blue mb-2">
                    <i class="fas fa-graduation-cap"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="text-muted font-semibold">Jurusan</h6>
                  <h6 class="font-extrabold mb-0">{{ $totalJurusan }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body px-4 py-4-5">
              <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                  <div class="stats-icon green mb-2">
                    <i class="fas fa-images"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="text-muted font-semibold">Foto Galeri</h6>
                  <h6 class="font-extrabold mb-0">{{ $totalGaleri }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body px-4 py-4-5">
              <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                  <div class="stats-icon red mb-2">
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="text-muted font-semibold">Total Kategori</h6>
                  <h6 class="font-extrabold mb-0">{{ $totalKategori }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        {{-- STATUS BERITA --}}
        <div class="col-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Status Berita</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fas fa-circle text-success me-2" style="font-size:10px;"></i> Published</span>
                <span class="fw-bold">{{ $totalPublished }}</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fas fa-circle text-warning me-2" style="font-size:10px;"></i> Draft</span>
                <span class="fw-bold">{{ $totalDraft }}</span>
              </div>

              @if ($totalDraft > 0)
                <a href="{{ route('dm-berita.index') }}" class="btn btn-sm btn-outline-warning w-100 mt-2">
                  <i class="fas fa-pen"></i> {{ $totalDraft }} berita masih draft, cek sekarang
                </a>
              @endif
            </div>
          </div>

          {{-- QUICK LINKS --}}
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Tambah Cepat</h4>
            </div>
            <div class="card-body d-grid gap-2">
              <a href="{{ route('dm-berita.create') }}" class="btn btn-primary icon icon-left">
                <i class="fas fa-plus"></i> Tambah Berita
              </a>
              <a href="{{ route('dm-jurusan.create') }}" class="btn btn-outline-primary icon icon-left">
                <i class="fas fa-plus"></i> Tambah Jurusan
              </a>
              <a href="{{ route('dm-galeri.index') }}" class="btn btn-outline-primary icon icon-left">
                <i class="fas fa-plus"></i> Tambah Foto Galeri
              </a>
            </div>
          </div>
        </div>

        {{-- BERITA TERBARU --}}
        <div class="col-12 col-lg-8">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Berita Terbaru</h4>
              <a href="{{ route('dm-berita.index') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
            </div>
            <div class="card-body">
              @if ($beritaTerbaru->isEmpty())
                <p class="text-muted text-center py-4 mb-0">Belum ada berita yang ditambahkan.</p>
              @else
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($beritaTerbaru as $item)
                        <tr>
                          <td>{{ Str::limit($item->judul, 40) }}</td>
                          <td>{{ $item->kategori->nama ?? '-' }}</td>
                          <td>
                            @if ($item->status == 'published')
                              <span class="badge bg-success">Published</span>
                            @elseif ($item->status == 'draft')
                              <span class="badge bg-warning text-dark">Draft</span>
                            @else
                              <span class="badge bg-secondary">{{ ucfirst($item->status) }}</span>
                            @endif
                          </td>
                          <td>{{ $item->created_at->format('d M Y') }}</td>
                          <td>
                            <a href="{{ route('dm-berita.edit', $item->id) }}" class="btn btn-sm btn-icon">
                              <i class="fas fa-pen-to-square"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
@endsection
