@extends('admin.layouts.main')

@section('title')
  <title>Review Data Berita</title>
@endsection

@section('main')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Review Berita</h3>
          <p class="text-subtitle text-muted">Pratinjau konten berita sebelum diterbitkan ke publik.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dm-berita.index') }}">Data Berita</a></li>
              <li class="breadcrumb-item active" aria-current="page">Review Berita</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card shadow-sm border-0">

        {{-- Card Header Minimalis --}}
        <div class="card-header border-bottom bg-transparent py-3 d-flex justify-content-between align-items-center">
          <h4 class="card-title m-0 text-uppercase text-muted" style="font-size: 0.85rem; letter-spacing: 1px;">Pratinjau Artikel</h4>
          <a href="{{ route('dm-berita.index') }}" class="btn btn-light btn-sm icon icon-left font-bold">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>
        </div>

        <div class="card-body pt-5">
          {{-- Wrapper untuk membatasi lebar konten (Optimal Reading Width) --}}
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">

              {{-- HEADER INFO BERITA --}}
              <div class="text-center mb-5">

                {{-- Status Badge (Pindah ke atas agar jadi pusat perhatian pertama) --}}
                <div class="mb-4">
                  @if ($berita->status == 'review')
                    <span class="badge bg-light-warning text-warning px-4 py-2 rounded-pill"><i class="fas fa-clock me-1"></i> Menunggu Review</span>
                  @elseif($berita->status == 'published')
                    <span class="badge bg-light-success text-success px-4 py-2 rounded-pill"><i class="fas fa-check-circle me-1"></i> Tayang</span>
                  @else
                    <span class="badge bg-light-secondary text-secondary px-4 py-2 rounded-pill"><i class="fas fa-file-alt me-1"></i> Draft</span>
                  @endif
                </div>

                {{-- Judul Artikel --}}
                <h1 class="font-bold text-dark mb-4" style="line-height: 1.4;">{{ $berita->judul }}</h1>

                {{-- Meta Data (Author, Tanggal, Kategori) --}}
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-4 text-muted" style="font-size: 0.95rem;">
                  <span class="d-flex align-items-center gap-2"><i class="fas fa-user-circle fs-5 text-primary"></i> {{ $berita->author->name ?? 'Admin' }}</span>
                  <span class="d-flex align-items-center gap-2"><i class="fas fa-calendar-alt text-primary"></i> {{ $berita->created_at->format('d F Y, H:i') }}</span>
                  <span class="d-flex align-items-center gap-2"><i class="fas fa-folder-open text-primary"></i> {{ $berita->kategori }}</span>
                </div>
              </div>

              {{-- GAMBAR THUMBNAIL --}}
              @if ($berita->gambar)
                <div class="mb-5 text-center">
                  <div class="overflow-hidden rounded-4 shadow-sm mx-auto" style="max-width: 900px;">
                    <img src="{{ Storage::url('berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;">
                  </div>
                </div>
              @endif

              {{-- KONTEN BERITA --}}
              <div class="article-content text-dark mb-5" style="font-size: 1.15rem; line-height: 1.9;">
                {{-- Hapus class text-justify, biarkan default (left-align) --}}
                {!! $berita->konten !!}
              </div>

              {{-- PANEL AKSI REVIEW --}}
              <div class="mt-5 p-4 bg-light rounded-4 border">
                <div class="text-center mb-4">
                  <h6 class="text-muted font-bold text-uppercase m-0" style="letter-spacing: 1px;">Tindakan Review</h6>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-3">
                  {{-- Tombol Pemicu Modal Publish --}}
                  @if ($berita->status !== 'published')
                    <button type="button" class="btn btn-success icon icon-left px-4 py-2 font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#publishModal{{ $berita->id }}">
                      <i class="fas fa-check-circle"></i> Terbitkan (Publish)
                    </button>
                  @endif

                  {{-- Tombol Pemicu Modal Draft/Tolak --}}
                  @if ($berita->status !== 'draft')
                    <button type="button" class="btn btn-danger icon icon-left px-4 py-2 font-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#draftModal{{ $berita->id }}">
                      <i class="fas fa-times-circle"></i> Tolak (Jadikan Draft)
                    </button>
                  @endif

                  {{-- Tombol Edit (Hanya muncul jika berita BELUM published) --}}
                  @if ($berita->status !== 'published')
                    <a href="{{ route('dm-berita.edit', $berita->id) }}" class="btn btn-outline-primary icon icon-left px-4 py-2 font-bold">
                      <i class="fas fa-edit"></i> Edit Konten
                    </a>
                  @endif
                </div>

                {{-- Pesan Bantuan (Opsional) --}}
                @if ($berita->status == 'published')
                  <div class="text-center mt-3">
                    <small class="text-danger"><i class="fas fa-info-circle"></i> Berita yang sudah tayang tidak dapat diedit. Turunkan status menjadi Draf terlebih dahulu jika ingin mengubah
                      konten.</small>
                  </div>
                @endif
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  {{-- ================= MODAL PUBLISH ================= --}}
  @if ($berita->status !== 'published')
    <div class="modal fade" id="publishModal{{ $berita->id }}" tabindex="-1" aria-labelledby="publishModalLabel{{ $berita->id }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">

          <div class="modal-header border-0 pb-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center pb-4 px-4">
            <div class="text-success mb-3">
              <i class="fas fa-check-circle fa-4x"></i>
            </div>
            <h4 class="mb-2" id="publishModalLabel{{ $berita->id }}">Terbitkan Berita?</h4>
            <p class="text-muted mb-0">
              Apakah Anda yakin ingin menerbitkan berita ini? <br>
              Berita akan langsung tayang dan dapat dilihat oleh publik.
            </p>
          </div>

          <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
            <form action="{{ route('dm-berita.update-status', $berita->id) }}" method="POST" class="m-0">
              @csrf
              @method('PATCH')
              <input type="hidden" name="status" value="published">
              <button type="submit" class="btn btn-success px-4">Ya, Terbitkan</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  @endif


  {{-- ================= MODAL DRAFT/TOLAK ================= --}}
  @if ($berita->status !== 'draft')
    <div class="modal fade" id="draftModal{{ $berita->id }}" tabindex="-1" aria-labelledby="draftModalLabel{{ $berita->id }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">

          <div class="modal-header border-0 pb-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center pb-4 px-4">
            <div class="text-danger mb-3">
              <i class="fas fa-times-circle fa-4x"></i>
            </div>
            <h4 class="mb-2" id="draftModalLabel{{ $berita->id }}">Tolak Berita?</h4>
            <p class="text-muted mb-0">
              Apakah Anda yakin ingin mengembalikan berita ini ke draf? <br>
              Berita ini akan disembunyikan dari halaman publik.
            </p>
          </div>

          <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
            <form action="{{ route('dm-berita.update-status', $berita->id) }}" method="POST" class="m-0">
              @csrf
              @method('PATCH')
              <input type="hidden" name="status" value="draft">
              <button type="submit" class="btn btn-danger px-4">Ya, Tolak (Draf)</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  @endif
@endsection
