@if ($paginator->hasPages())
  <section id="pagination" class="pagination section">
    <div class="container">
      <div class="d-flex justify-content-center">
        <ul>
          {{-- Previous Page Link --}}
          @if ($paginator->onFirstPage())
            <li><a href="javascript:void(0)" aria-label="@lang('pagination.previous')"><i class="bi bi-chevron-left"></i></a></li>
          @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="bi bi-chevron-left"></i></a></li>
          @endif

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <li><a href="javascript:void(0)" class="active" aria-current="page"><span>{{ $page }}</span></a></li>
                @else
                  <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next Page Link --}}
          @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="bi bi-chevron-right"></i></a></li>
          @else
            <li><a href="javascript:void(0)" aria-label="@lang('pagination.next')"><i class="bi bi-chevron-right"></i></a></li>
          @endif
        </ul>
      </div>
    </div>
  </section>
@endif
