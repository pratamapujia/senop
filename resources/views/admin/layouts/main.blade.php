<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')

    <link rel="shortcut icon" href="{{ asset('assets/senop/img/logo/icon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/app.css') }}">
    {{-- <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/app-dark.css') }}"> --}}
  </head>

  <body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
      <div id="sidebar">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/senop/img/logo/smksenopati.png') }}" alt="Logo" srcset=""></a>
              </div>
              <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
              </div>
            </div>
          </div>

          {{-- Menu --}}
          @include('admin.layouts.menu')
          {{-- End Menu --}}

        </div>
      </div>
      <div id="main" class='layout-navbar navbar-fixed'>
        <header>
          <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
              <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown ms-auto">
                  <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                      <div class="user-name text-end me-3">
                        <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                      </div>
                      <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                          <img src="{{ asset('assets/senop/img/logo/icon.png') }}" />
                        </div>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
                    <li>
                      <h6 class="dropdown-header">Hello, {{ Auth::user()->name }}</h6>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"><i class="icon-mid bi bi-box-arrow-left me-2" style="color: red"></i>
                        Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <div id="main-content">

          @yield('main')

        </div>
        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>{{ date('Y') }} &copy; SMK Senopati Sedati</p>
            </div>
            <div class="float-end">
              <p>Template by <a href="https://saugi.me">Mazer </a><span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span></p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    {{-- <script src="{{ asset('assets/static/js/components/dark.js') }}"></script> --}}
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>


  </body>

</html>
