<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="auth-wrapper">
	<div class="auth-content text-center">
		{{-- <img src="assets/images/logo.png" alt="" class="img-fluid mb-4"> --}}
		<form action="{{ route('submit.login') }}" method="POST">
      @csrf
      <div class="card borderless">
        <div class="row align-items-center ">
          <div class="col-md-12">
            <div class="card-body">
              @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              @error('email')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
              @enderror
              <h4 class="mb-3 f-w-400">HRD|Login</h4>
              <hr>
              <div class="form-group mb-3">
                <input type="email" name="email" class="form-control" id="Email" placeholder="Email address">
              </div>
              <div class="form-group mb-4">
                <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
              </div>
              {{-- Feature Save Credential --}}
              {{-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
              </div> --}}
              <button class="btn btn-block btn-primary mb-4">Submit</button>
              <hr>
              <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
              <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
            </div>
          </div>
        </div>
      </div>
    </form>
	</div>
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>

</html>
