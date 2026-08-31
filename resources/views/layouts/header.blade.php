@php
  // DEFINISI DATA MENU (Ubah/Tambah Menu Di Sini Saja)
  $menus = [
      [
          'title' => 'Beranda',
          'url' => '/',
          'children' => [], // Kosongkan jika tidak ada dropdown
      ],
      [
          'title' => 'Profil Sekolah',
          'url' => 'javascript:void(0)',
          'children' => [
              ['title' => 'Identitas Sekolah', 'url' => route('profil')],
              ['title' => 'Visi dan Misi', 'url' => route('visi-misi')],
              ['title' => 'Sejarah', 'url' => route('sejarah')],
              ['title' => 'Struktur Organisasi', 'url' => route('struktur')],
              ['title' => 'Fasilitas', 'url' => route('fasilitas')],
              ['title' => 'Prestasi', 'url' => route('prestasi')],
          ],
      ],
      [
          'title' => 'Konsentrasi Keahlian',
          'url' => 'javascript:void(0)',
          'children' => [
              ['title' => 'Desain Komunikasi Visual', 'url' => route('dkv')],
              ['title' => 'Manajemen Perkantoran', 'url' => route('mp')],
              ['title' => 'Rekayasa Perangkat Lunak', 'url' => route('rpl')],
              ['title' => 'Teknik Komputer dan Jaringan', 'url' => route('tkj')],
              ['title' => 'Teknik Kendaraan Ringan', 'url' => route('tkr')],
              ['title' => 'Teknik Sepeda Motor', 'url' => route('tsm')],
          ],
      ],
      [
          'title' => 'Informasi',
          'url' => 'javascript:void(0)',
          'children' => [
              ['title' => 'Berita', 'url' => route('berita')],
              ['title' => 'Agenda Kegiatan', 'url' => route('agenda')],
              ['title' => 'Galeri', 'url' => route('galeri')],
              ['title' => 'Hubungi Kami', 'url' => route('kontak')],
          ],
      ],
      [
          'title' => 'Virtual Tour',
          'url' => 'https://virtualsekolah.id/tour/viewer/index.php?code=c9f0f895fb98ab9159f51fd0297e236d',
          'children' => [],
          'target' => '_blank', // Opsi tambahan untuk link eksternal
      ],
  ];
@endphp

<header class="sticky top-10 z-50 w-full transition-all duration-300">
  <div class="container mx-auto px-4 sm:px-0">

    <div class="relative bg-white/75 backdrop-blur-md border border-gray-100 shadow-xl rounded-full px-6 py-3 mt-4 flex items-center justify-between z-50">

      {{-- LOGO SECTION --}}
      <a href="/" class="flex items-center gap-2 shrink-0">
        <img src="{{ asset('assets/senop/img/logo/icon.webp') }}" class="h-10 w-auto object-contain" alt="Logo SMK Senopati">
        <img src="{{ asset('assets/senop/img/logo/smksenopati.webp') }}" class="h-10 w-auto object-contain" alt="Logo SMK Senopati">
      </a>

      {{-- DESKTOP MENU (Looping dari Array $menus) --}}
      <nav class="hidden xl:flex items-center gap-8">
        <ul class="flex items-center gap-6 list-none p-0 m-0 text-sm font-medium text-header">
          @foreach ($menus as $menu)
            @if (empty($menu['children']))
              {{-- Menu Tunggal --}}
              <li>
                <a href="{{ $menu['url'] }}" target="{{ $menu['target'] ?? '_self' }}" class="flex items-center gap-1 hover:text-primary transition-colors py-3">
                  {{ $menu['title'] }}
                </a>
              </li>
            @else
              {{-- Menu Dropdown --}}
              <li class="relative
                  group h-full flex items-center">
                <a href="{{ $menu['url'] }}" class="flex items-center gap-1 hover:text-primary transition-colors py-3">
                  {{ $menu['title'] }}
                  <i class="bi bi-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
                <ul
                  class="absolute top-full left-0 mt-2 w-56 bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden py-2 invisible opacity-0 translate-y-2 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 transform origin-top z-60">
                  @foreach ($menu['children'] as $child)
                    <li>
                      <a href="{{ $child['url'] }}" class="block px-5 py-2.5 hover:bg-blue-50 hover:text-primary transition-colors">
                        {{ $child['title'] }}
                      </a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @endif
          @endforeach
        </ul>
      </nav>

      {{-- RIGHT SECTION --}}
      <div class="hidden xl:flex items-center gap-4">
        <div class="flex items-center gap-3 pr-4 border-r border-gray-200">
          <a href="https://www.facebook.com/esemka.senopati.9" target="_blank" class="text-accent/70 hover:text-primary transition-colors"><i class="bi bi-facebook text-lg"></i></a>
          <a href="https://instagram.com/smk_senopati/" target="_blank" class="text-accent/70 hover:text-pink-600 transition-colors"><i class="bi bi-instagram text-lg"></i></a>
          <a href="https://tiktok.com/@smk_senopati/" target="_blank" class="text-accent/70 hover:text-black transition-colors"><i class="bi bi-tiktok text-lg"></i></a>
          <a href="https://www.youtube.com/@smksenopatisedati" target="_blank" class="text-accent/70 hover:text-red-600 transition-colors"><i class="bi bi-youtube text-lg"></i></a>
        </div>
        <a href="javascript:void(0)" class="px-5 py-2.5 bg-primary text-white text-sm font-semibold rounded-full hover:bg-accent transition-shadow shadow-md hover:shadow-lg">
          SPMB
        </a>
      </div>

      {{-- MOBILE TOGGLE BUTTON --}}
      <button id="mobile-menu-btn" class="xl:hidden p-2 text-gray-700 focus:outline-none">
        <i id="mobile-menu-icon" class="bi bi-list text-2xl"></i>
      </button>

    </div>

    {{-- MOBILE MENU (Looping dari Array $menus yang sama) --}}
    <div id="mobile-menu" class="hidden xl:hidden mt-2 mx-2 bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden relative z-40 transition-all duration-300">
      <ul class="flex flex-col py-4 px-2 space-y-1 text-gray-700">

        @foreach ($menus as $menu)
          @if (empty($menu['children']))
            {{-- Mobile Menu Tunggal --}}
            <li>
              <a href="{{ $menu['url'] }}" target="{{ $menu['target'] ?? '_self' }}" class="block px-4 py-2 hover:bg-blue-50 hover:text-primary rounded-xl font-medium">
                {{ $menu['title'] }}
              </a>
            </li>
          @else
            {{-- Mobile Menu Dropdown --}}
            <li>
              <button class="mobile-dropdown-toggle w-full flex items-center justify-between px-4 py-2 hover:bg-blue-50 hover:text-primary rounded-xl font-medium">
                {{ $menu['title'] }} <i class="bi bi-chevron-down text-xs transition-transform"></i>
              </button>
              <ul class="hidden pl-4 pr-2 mt-1 space-y-1 bg-gray-50 rounded-xl mx-2 py-2">
                @foreach ($menu['children'] as $child)
                  <li>
                    <a href="{{ $child['url'] }}" class="block px-4 py-2 hover:text-primary text-sm">
                      {{ $child['title'] }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </li>
          @endif
        @endforeach

        {{-- Mobile Sosmed & PPDB (Bagian Statis) --}}
        <div class="flex items-center justify-center gap-6 pt-4 mt-2 border-t border-gray-100">
          <a href="https://www.facebook.com/esemka.senopati.9" target="_blank" class="text-primary"><i class="bi bi-facebook text-xl"></i></a>
          <a href="https://instagram.com/smk_senopati/" target="_blank" class="text-pink-600"><i class="bi bi-instagram text-xl"></i></a>
          <a href="https://tiktok.com/@smk_senopati/" target="_blank" class="text-black"><i class="bi bi-tiktok text-xl"></i></a>
          <a href="https://www.youtube.com/@smksenopatisedati" target="_blank" class="text-red-600"><i class="bi bi-youtube text-xl"></i></a>
        </div>

        <li class="px-2 pt-2">
          <a href="#" class="block text-center w-full px-4 py-2 bg-primary text-white rounded-full font-semibold hover:bg-accent shadow-md">SPMB</a>
        </li>
      </ul>
    </div>
  </div>
</header>
