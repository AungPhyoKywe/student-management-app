
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School | MN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel='icon' href='/img/school_logo.jpg' type='image/x-icon'/ >

    <style>
       
      #img-logo{
          width: 5rem;
          border-radius: 100%;

      }
     .body-bg{
          background-image: url("img/bg-system.jpg");
          background-size: cover;
         
          background-color: black;
      }
    
    </style>
</head>
<body class="hold-transition login-page body-bg">
<div class="login-box">
    <div class="login-logo">
        <img src="/img/school_logo.jpg" id="img-logo">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body" style="border-radius: 10%;box-shadow: #54678f 10px;">
            <p class="login-box-msg"><strong>Schools MN System</strong></p>
            @error('email')
            <span class="text-danger" role="alert">
                <i>incorrect email address</i>
            </span>
            @enderror

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                </div>
                @error('password')
                <span class="text-danger" role="alert">
                    incorrect password
                </span>
                @enderror
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block" style="border-color: white ">
                            Login
                        </button>

                    </div>
                    <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="remember">
                          <label for="remember">
                            Remember Me
                          </label>
                        </div>
                      </div>
                    
                    <!-- /.col -->
                </div>
            </form>
            
            <!-- /.social-auth-links -->

            <div class="row">
                <div class="col-12">

                    <p class="mb-1">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                    </p>

                </div>
            </div>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>


