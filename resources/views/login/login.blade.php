<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | {{ $title }}</title>

  <style>
    body,
    html {
      height: 100%;
      margin: 0;
    }
    .bg {
      background-image: url("https://www.w3docs.com/uploads/media/default/0001/01/477719675fecaac0362957c214fb9aa56fca99b5.jpeg");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/dist/css/adminlte.min.css">
  
</head>
<body class="hold-transition login-page">

  <!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset ('') }}assets/dist/img/whatsapp.png" alt="AdminLTELogo" height="60" width="60">
</div>


<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h2">
        <i class="fab fa-whatsapp">&nbsp;</i><b>Whatsapp&nbsp;</b>API
    </a>
    </div>
    <div class="card-body">

      @if (session()->has('success'))
          
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      @if (session()->has('loginError'))
          
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post" action="/login">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
       
        </div>
        <button class="btn btn-block btn-success" type="submit">Login</button>
      </form>

      <br>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="/forgot-password">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset ('') }}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('') }}assets/dist/js/adminlte.min.js"></script>
</body>
</html>
