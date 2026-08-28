<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('assets/senop/favicon/favicon.ico') }}">

    @yield('title')

    {{-- Sweetalert --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/extensions/sweetalert2/sweetalert2.min.css') }}">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/extensions/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" crossorigin href="{{ asset('assets/admin/compiled/css/app.css') }}">
  </head>

  <body>
    <script src="{{ asset('assets/admin/static/js/initTheme.js') }}"></script>
    <div id="app">

      @include('admin.layouts.sidebar')

      <div id="main" class='layout-navbar navbar-fixed'>

        @include('admin.layouts.header')

        <div id="main-content">

          @yield('main')

        </div>
        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2026 &copy; SMK Senopati</p>
            </div>
            <div class="float-end">
              <p>Template <a href="https://zuramai.github.io/mazer">Mazer</a></p>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="{{ asset('assets/admin/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/admin/compiled/js/app.js') }}"></script>

    {{-- Sweetalert --}}
    <script src="{{ asset('assets/admin/extensions/sweetalert2/sweetalert2.min.js') }}"></script>

    {{-- My JS --}}
    <script src="{{ asset('assets/senop/admin-senop.js') }}"></script>

    @yield('js')


  </body>

</html>
