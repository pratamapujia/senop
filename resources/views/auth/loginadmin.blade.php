<!doctype html>
<html lang="id">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/senop/img/logo/icon.ico') }}" type="image/x-icon">

    {{-- Bootstrap --}}
    <link href="{{ asset('assets/static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('assets/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}">

    <title>Admin Login</title>

    <style>
      /* Style kustom untuk halaman login */
      body {
        background-color: #e9ecef;
        /* Warna latar belakang abu-abu muda */
      }

      .login-container {
        min-height: 100vh;
        /* Tinggi minimal 100% dari viewport */
      }

      .login-card {
        max-width: 450px;
        /* Lebar maksimum kartu login */
        border-radius: 15px;
        /* Sudut kartu yang lebih tumpul */
        padding: 1.5rem;
      }

      .login-card .card-title {
        font-weight: 700;
        /* Membuat judul lebih tebal */
        color: #575757;
      }

      .btn-login {
        font-weight: 600;
        padding: 0.75rem;
      }
    </style>
  </head>

  <body>

    <div class="container-fluid login-container d-flex justify-content-center align-items-center">

      <div class="card shadow-lg login-card">
        <div class="card-body p-4">

          <h2 class="card-title text-center mb-4">
            <i class="bi bi-shield-lock-fill me-2"></i>
            Admin Login
          </h2>

          {{-- Alert --}}
          @if (Session::get('error'))
            <div class="alert alert-danger alert-dismissible show fade">
              <i class="fas fa-triangle-exclamation"></i> {{ Session::get('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="{{ route('loginadmin') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email atau Username</label>
              <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Masukkan password" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg btn-login">Login</button>
            </div>

          </form>

          <div class="text-center mt-4">
            <p class="text-muted">Kembali ke <a href="{{ route('home') }}" class="text-decoration-none">Halaman Utama</a></p>
          </div>

        </div>
      </div>
    </div>

    <script src="{{ asset('assets/static/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  </body>

</html>
