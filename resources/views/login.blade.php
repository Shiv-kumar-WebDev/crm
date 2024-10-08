<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="{{ url('public') }}/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
	<link href="{{ url('public') }}/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('public') }}/assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ url('public') }}/assets/demo/demo_configurator.js"></script>
	<script src="{{ url('public') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ url('public') }}/assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" class="d-inline-flex align-items-center">
					<!-- <img src="https://themes.kopyov.com/limitless/demo/template/assets/images/logo_icon.svg" alt="">
					<img src="https://themes.kopyov.com/limitless/demo/template/assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt=""> -->
				</a>
			</div>

			<div class="d-flex justify-content-end align-items-center ms-auto">
				<ul class="navbar-nav flex-row">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-lifebuoy"></i>
							<span class="d-none d-md-inline-block ms-2">Support</span>
						</div>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle-plus"></i>
							<span class="d-none d-md-inline-block ms-2">Register</span>
						</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle"></i>
							<span class="d-none d-md-inline-block ms-2">Login</span>
						</div>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="{{ route('login.post') }}" method="post">
                        @csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="{{ url('public/assets/images/logo.png') }}" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">{{ session()->get('error') }}</div>
                                    @endif
								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input name="email" type="text" class="form-control" placeholder="john@doe.com">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input name="password" type="password" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Sign in</button>
								</div>

								<!-- <div class="text-center">
									<a href="login_password_recover.html">Forgot password?</a>
								</div> -->
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2024 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Skyglobals</a></span>

						
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>
