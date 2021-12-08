<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('') }}assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">

  <!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset ('') }}assets/dist/img/whatsapp.png" alt="AdminLTELogo" height="60" width="60">
</div>

<div class="register-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h2"><b>Register</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="/register" method="post">
        @csrf
        <div class="input-group mb-3">
          
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name" placeholder="Name" required value="{{ old('name') }}">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')

          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- username --}}
        <div class="input-group mb-3">
          
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Usename" required value="{{ old('username') }}">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-portrait"></span>
            </div>
          </div>
          @error('username')

          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        {{-- email --}}
        <div class="input-group mb-3">

          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
          
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

        {{-- password --}}
        <div class="input-group mb-3">
          
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')

          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      
        {{-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div> --}}

        <button class="btn btn-block btn-success" type="submit">Sign Up</button>
      </form>

      

      <a href="/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset ('') }}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('') }}assets/dist/js/adminlte.min.js"></script>
</body>
</html>
