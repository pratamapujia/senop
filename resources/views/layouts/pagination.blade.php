@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">

    {{-- ================= TAMPILAN MOBILE ================= --}}
    <div class="flex gap-2 items-center justify-between sm:hidden">
      {{-- Tombol Previous --}}
      @if ($paginator->onFirstPage())
        <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-50 border border-gray-200 cursor-not-allowed rounded-[10px]">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
          class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 hover:text-primary hover:border-blue-200 transition-all duration-300">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      {{-- Tombol Next --}}
      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
          class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 hover:text-primary hover:border-blue-200 transition-all duration-300">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-50 border border-gray-200 cursor-not-allowed rounded-[10px]">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    {{-- ================= TAMPILAN DESKTOP ================= --}}
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 md:mt-0">

      {{-- Info Jumlah Data --}}
      <div>
        <p class="text-sm text-gray-500 font-medium leading-5">
          {!! __('Menampilkan') !!}
          @if ($paginator->firstItem())
            <span class="font-bold text-gray-700">{{ $paginator->firstItem() }}</span>
            {!! __('sampai') !!}
            <span class="font-bold text-gray-700">{{ $paginator->lastItem() }}</span>
          @else
            {{ $paginator->count() }}
          @endif
          {!! __('dari') !!}
          <span class="font-bold text-gray-700">{{ $paginator->total() }}</span>
          {!! __('data') !!}
        </p>
      </div>

      {{-- Paginasi Angka --}}
      <div>
        {{-- Gunakan gap-1.5 untuk memberi jarak antar kotak --}}
        <span class="inline-flex rtl:flex-row-reverse items-center gap-1.5 rounded-[10px]">

          {{-- Tombol Panah Kiri (Previous) --}}
          @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
              <span class="min-w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-300 bg-gray-50 border border-gray-100 cursor-not-allowed rounded-[10px]" aria-hidden="true">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
              class="min-w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 hover:text-primary hover:border-blue-200 transition-all duration-300"
              aria-label="{{ __('pagination.previous') }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </a>
          @endif

          {{-- Looping Angka Halaman --}}
          @foreach ($elements as $element)
            {{-- Pemisah Tiga Titik (...) --}}
            @if (is_string($element))
              <span aria-disabled="true">
                <span class="min-w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-400 cursor-default rounded-[10px]">{{ $element }}</span>
              </span>
            @endif

            {{-- Array Tautan Halaman --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    {{-- Style Halaman Aktif (Kotak Primary) --}}
                    <span
                      class="min-w-10 h-10 flex items-center justify-center px-2 text-sm font-bold text-white bg-primary border border-primary shadow-md shadow-primary/30 cursor-default rounded-[10px] transition-all duration-300">
                      {{ $page }}
                    </span>
                  </span>
                @else
                  {{-- Style Halaman Tidak Aktif --}}
                  <a href="{{ $url }}"
                    class="min-w-10 h-10 flex items-center justify-center px-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 hover:text-primary hover:border-blue-200 transition-all duration-300"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Tombol Panah Kanan (Next) --}}
          @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
              class="min-w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 hover:text-primary hover:border-blue-200 transition-all duration-300"
              aria-label="{{ __('pagination.next') }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </a>
          @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
              <span class="min-w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-300 bg-gray-50 border border-gray-100 cursor-not-allowed rounded-[10px]" aria-hidden="true">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif
