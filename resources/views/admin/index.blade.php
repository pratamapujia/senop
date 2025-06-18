<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-calendar-week"></i>
                  <span>Agenda</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-newspaper"></i>
                  <span>Berita</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-images"></i>
                  <span>Galeri</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-person-video3"></i>
                  <span>Guru</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-person-arms-up"></i>
                  <span>Jumlah Siswa</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-trophy-fill"></i>
                  <span>Prestasi</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-person-fill-add"></i>
                  <span>PPDB</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-chat-right-quote"></i>
                  <span>Testimoni</span>
                </a>
              </li>

            </ul>
          </div>
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
                        <h6 class="mb-0 text-gray-600">ADMIN</h6>
                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                      </div>
                      <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                          <img src="{{ asset('assets/static/images/faces/1.jpg') }}" />
                        </div>
                      </div>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
                    <li>
                      <h6 class="dropdown-header">Hello, admin</h6>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2" style="color: red"></i>
                        Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <div id="main-content">

          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Dashboard Admin Senop</h3>
                  <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">About Vertical Navbar</h4>
                </div>
                <div class="card-body">
                  <p>Vertical Navbar is a layout option that you can use with Mazer. </p>

                  <p>In case you want the navbar to be sticky on top while scrolling, add <code>.navbar-fixed</code> class alongside with <code>.layout-navbar</code> class.</p>
                </div>
              </div>
            </section>
          </div>

        </div>
        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">Saugi</a></p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>


  </body>

</html>
