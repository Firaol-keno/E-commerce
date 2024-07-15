<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/fobia/demo/ltr/authentication-sign-in-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:42:29 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

  <title>Sign In</title>
</head>

<body>

  <div class="login-bg-overlay au-sign-in-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign In</h4>
                <p>Sign In to your account</p>
              </div>
              <form class="form-body row g-3" action="{{route('signin') }}" method="POST">
                @csrf
                <div class="col-12 col-lg-12">
                  <div class="d-grid gap-2">
                    <a href="javascript:;" class="btn border border-2 border-primary"><img
                        src="assets/images/icons/google.png" width="20" alt=""><span class="ms-3 fw-500">Sign in with
                        Google</span></a>
                    <a href="javascript:;" class="btn border border-2 border-dark"><img
                        src="assets/images/icons/apple-black-logo.png" width="20" alt=""><span class="ms-3 fw-500">Sign
                        in with Apple</span></a>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator-2 translate-middle-y">OR</div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="text" name="username_or_email" class="form-control" id="inputEmail" placeholder="abc@example.com">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Your password">
                </div>
                </div>
               <!-- <div class="col-12 col-lg-6 text-end">
                  <a href="authentication-reset-password-basic.html">Forgot Password?</a>
                </div>-->
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Don't have an account? <a href="{{ url('/signup') }}" >Sign up</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
          <a href="javascript:;">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-github"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </div>
        <div class="text-center">
          <p class="my-4">Copyright © 2024</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  
</body>


<!-- Mirrored from codervent.com/fobia/demo/ltr/authentication-sign-in-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:42:35 GMT -->
</html>