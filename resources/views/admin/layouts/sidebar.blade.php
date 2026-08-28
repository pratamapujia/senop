@php
  // DEFINISI DATA MENU (Ubah/Tambah Menu Di Sini Saja)
  $menus = [
      [
          'title' => 'Beranda',
          'url' => route('admin'), // Menggunakan route agar lebih aman
          'icon' => 'fa-igloo',
          'active' => request()->is('admin*'), // Menggunakan wildcard untuk mencakup sub-halaman jika ada
          'children' => [], // Kosongkan jika tidak ada dropdown
      ],
      [
          'title' => 'Profil Guru & Staff',
          'url' => route('dm-struktur.index'),
          'icon' => 'fa-people-group',
          'active' => request()->is('dm-struktur*'),
          'children' => [],
      ],
      [
          'title' => 'Agenda',
          'url' => route('dm-agenda.index'),
          'icon' => 'fa-calendar',
          'active' => request()->is('dm-agenda*'),
          'children' => [],
      ],
      [
          'title' => 'Berita',
          'url' => route('dm-berita.index'),
          'icon' => 'fa-newspaper',
          'active' => request()->is('dm-berita*'),
          'children' => [],
      ],
      [
          'title' => 'Galeri',
          'url' => route('dm-galeri.index'),
          'icon' => 'fa-images',
          'active' => request()->is('dm-galeri*'),
          'children' => [],
      ],
      [
          'title' => 'Testimoni',
          'url' => route('dm-testimoni.index'),
          'icon' => 'fa-quote-right',
          'active' => request()->is('dm-testimoni*'),
          'children' => [],
      ],
      // [
      //     'title' => 'PPDB',
      //     'url' => route('admin-ppdb'),
      //     'icon' => 'bi-person-plus',
      //     'active' => request()->is('admin/ppdb*'),
      // ],
  ];
@endphp

<div id="sidebar">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
      <div class="d-flex justify-content-between align-items-center">
        <div class="logo">
          <a href="{{ route('admin') }}">
            <img src="{{ asset('assets/senop/img/logo/smksenopati.webp') }}" alt="Logo" style="height: 42px">
          </a>
        </div>
        <div class="sidebar-toggler x">
          <a href="javascript:void(0)" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>

    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        {{-- Perulangan Menu Dinamis --}}
        @foreach ($menus as $menu)
          <li class="sidebar-item {{ $menu['active'] ? 'active' : '' }} {{ count($menu['children']) > 0 ? 'has-sub' : '' }}">
            <a href="{{ $menu['url'] }}" class="sidebar-link">
              <i class="fa-solid {{ $menu['icon'] }}"></i>
              <span>{{ $menu['title'] }}</span>
            </a>

            {{-- Jika memiliki Children/Submenu --}}
            @if (count($menu['children']) > 0)
              <ul class="submenu {{ $menu['active'] ? 'active' : '' }}">
                @foreach ($menu['children'] as $child)
                  <li class="submenu-item {{ $child['active'] ? 'active' : '' }}">
                    <a href="{{ $child['url'] }}" class="submenu-link">{{ $child['title'] }}</a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach

      </ul>
    </div>
  </div>
</div>
