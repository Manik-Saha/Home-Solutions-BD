<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	{{-- @csrf --}}
	{{-- {{csrf_field()}} --}}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('loginAssets/css/style.css') }}">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url( {{ asset('loginAssets/images/aa.jpg') }} )">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
							</div>
							<form method="post" class="signin-form">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<p style="color: red; font-size: 15px;">{{session('msg')}}</p>
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" name="Username" class="form-control" placeholder="Username">
									<p style="color: red; font-size: 15px;">{{ $errors->first('Username') }}</p>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="Password" class="form-control" placeholder="Password">
									<p style="color: red; font-size: 15px;">{{ $errors->first('Password') }}</p>
								</div><br>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('loginAssets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('loginAssets/js/popper.js') }}"></script>
	<script src="{{ asset('loginAssets/js/bootstrap.min.js') }}"></script>

</body>

</html>