<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style-center.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
      :root {
        --primary-color: #4a69bd;
        --primary-hover: #60a3bc;
        --text-color: #ffffff;
        --placeholder-color: rgba(255, 255, 255, 0.7);
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
        overflow: hidden;
      }

      /* --- Animated Background --- */
      .background-shapes {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
        background: linear-gradient(45deg, #1e3c72, #2a5298, #4a69bd, #60a3bc);
        background-size: 400% 400%;
        animation: gradient-animation 15s ease infinite;
      }

      @keyframes gradient-animation {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }

      .shape {
        position: absolute;
        background-color: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        animation: move 25s infinite linear alternate;
      }

      .shape1 {
        width: 220px;
        height: 220px;
        top: 5%;
        left: 15%;
      }

      .shape2 {
        width: 150px;
        height: 150px;
        top: 70%;
        left: 80%;
        animation-duration: 20s;
      }

      .shape3 {
        width: 100px;
        height: 100px;
        top: 50%;
        left: 50%;
        animation-duration: 30s;
      }

      .shape4 {
        width: 180px;
        height: 180px;
        top: 80%;
        left: 10%;
        animation-duration: 18s;
      }

      @keyframes move {
        from {
          transform: translate(0, 0) rotate(0deg);
        }

        to {
          transform: translate(100px, -50px) rotate(180deg);
        }
      }

      /* --- Main Centered Container --- */
      .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
        padding: 20px;
      }

      /* --- Glassmorphism Card --- */
      .form-card {
        width: 100%;
        max-width: 400px;
        padding: 40px 35px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.25);
        text-align: center;
      }

      .form-card h2 {
        font-size: 26px;
        margin-bottom: 8px;
        font-weight: 600;
      }

      .subtitle {
        font-size: 14px;
        margin-bottom: 30px;
        opacity: 0.8;
      }

      /* --- Form Elements --- */
      .input-group {
        margin-bottom: 20px;
      }

      .input-field {
        position: relative;
      }

      .input-field i {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--placeholder-color);
        font-size: 15px;
      }

      .input-field input {
        width: 100%;
        padding: 14px 15px 14px 50px;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        color: var(--text-color);
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        transition: all 0.3s ease;
      }

      .input-field input::placeholder {
        color: var(--placeholder-color);
      }

      .input-field input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
      }

      .form-options {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 25px;
      }

      .forgot-password {
        font-size: 13px;
        color: var(--text-color);
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s ease;
      }

      .forgot-password:hover {
        opacity: 1;
        text-decoration: underline;
      }

      .login-button {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 10px;
        background: var(--primary-color);
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }

      .login-button:hover {
        background: var(--primary-hover);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
      }

      .login-button:active {
        transform: translateY(-1px);
      }

      .alert {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        display: flex;
        align-items: center;
        opacity: 1;
        transform: translateY(0);
        height: auto;
        padding: 12px 15px;
        margin-bottom: 20px;

        transition: all 0.4s ease;
      }

      .alert i {
        margin-right: 10px;
        font-size: 16px;
      }

      .alert-error {
        background-color: rgba(231, 76, 60, 0.5);
        /* Merah transparan */
        border: 1px solid rgba(231, 76, 60, 0.7);
        color: #ffffff;
      }
    </style>
  </head>

  <body>
    <div class="background-shapes">
      <div class="shape shape1"></div>
      <div class="shape shape2"></div>
      <div class="shape shape3"></div>
      <div class="shape shape4"></div>
    </div>

    <div class="login-container">
      <div class="form-card">
        <h2>Admin Panel Login</h2>
        <p class="subtitle">Masuk untuk melanjutkan ke dashboard</p>
        {{-- Alert --}}
        @if (Session::get('error'))
          <div class="alert alert-error">
            <i class="fas fa-exclamation-triangle"></i> {{ Session::get('error') }}
          </div>
        @endif
        <form action="{{ route('loginadmin') }}" method="POST">
          @csrf
          <div class="input-group">
            <div class="input-field">
              <i class="fas fa-at"></i>
              <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
          </div>

          <div class="input-group">
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
          </div>

          <button type="submit" class="login-button">Masuk</button>
        </form>
      </div>
    </div>
  </body>

</html>
