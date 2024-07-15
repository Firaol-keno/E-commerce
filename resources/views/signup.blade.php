<!doctype html>
<html lang="en" class="light-theme">


<!-- Mirrored from codervent.com/fobia/demo/ltr/authentication-sign-up-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:42:36 GMT -->
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

  <title>Sign Up</title>
</head>

<body>

  <div class="login-bg-overlay au-sign-up-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign Up</h4>
                <p>Creat New account</p>
              </div>
              <form class="form-body row g-3" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-lg-12">
                  <div class="d-grid gap-2">
                    <a href="javascript:;" class="btn border border-2 border-primary"><img
                        src="assets/images/icons/google.png" width="20" alt=""><span class="ms-3 fw-500">Sign up with
                        Google</span></a>
                    <a href="javascript:;" class="btn border border-2 border-dark"><img
                        src="assets/images/icons/apple-black-logo.png" width="20" alt=""><span class="ms-3 fw-500">Sign
                        up with Apple</span></a>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator-2 translate-middle-y">OR</div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputName" class="form-label">First Name</label>
                  <input type="text" name="firstname" class="form-control" id="inputName" placeholder="First name">
                </div>
                <div class="col-12">
                  <label for="inputName" class="form-label">Last Name</label>
                  <input type="text" name="lastname" class="form-control" id="inputName" placeholder="Last name">
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="abc@example.com">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Your password">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="inputPassword" placeholder="Confirm password">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Phone Number</label>
                  <input type="text" name="phone_number" class="form-control" id="phone_number"  placeholder="Phone Number" >
                </div>
                <div class="form-group-material">
                  <label for="avatar">User Avatar</label>
                  <input type="file" name="avatar" id="avatar" required>
                </div> 
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Already have an account? <a href="{{ url('/signin') }}">Sign in</a></p>
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


<!-- Mirrored from codervent.com/fobia/demo/ltr/authentication-sign-up-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 06:42:36 GMT -->
</html>