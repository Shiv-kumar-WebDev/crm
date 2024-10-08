<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
					<img src="https://themes.kopyov.com/limitless/demo/template/assets/images/logo_icon.svg" alt="">
					<img src="https://themes.kopyov.com/limitless/demo/template/assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt="">
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
					</li> -->
					<li class="nav-item">
						<a href="{{ route('login') }}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle"></i>
							<span class="d-none d-md-inline-block ms-2">Login</span>
						</div>
						</a>
					</li>
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

					<!-- Registration form -->
					<form class="login-form" action="{{ route('register.post') }}" method="post">
						@csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="https://themes.kopyov.com/limitless/demo/template/assets/images/logo_icon.svg" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Create account</h5>
									<span class="d-block text-muted">All fields are required</span>
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Your credentials</span>
								</div>

								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input value="{{ old('name') }}" name="name" type="text" class="form-control" placeholder="JohnDoe">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
									@error('name')
										<div class="form-text text-danger">{{ $message }} <i class="ph-x-circle me-1"></i></div>
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
										<div class="form-text text-danger">{{ $message }} <i class="ph-x-circle me-1"></i></div>
                                    @enderror
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Your contacts</span>
								</div>

								<div class="mb-3">
									<label class="form-label">Your email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input value="{{ old('email') }}" name="email" type="text" class="form-control" placeholder="john@doe.com">
										<div class="form-control-feedback-icon">
											<i class="ph-at text-muted"></i>
										</div>
									</div>
									@error('email')
										<div class="form-text text-danger">{{ $message }} <i class="ph-x-circle me-1"></i></div>
                                    @enderror
								</div>

								<div class="mb-3">
									<label class="form-label">Repeat email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input name="email_confirmation" type="text" class="form-control" placeholder="john@doe.com">
										<div class="form-control-feedback-icon">
											<i class="ph-at text-muted"></i>
										</div>
									</div>
									@error('email_confirmation')
										<div class="form-text text-danger">{{ $message }} <i class="ph-x-circle me-1"></i></div>
                                    @enderror
								</div>

								<!-- <div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Additions</span>
								</div> -->

								<div class="mb-3">
									<label class="form-check">
										<input type="checkbox" name="remember" class="form-check-input">
										<span class="form-check-label">Accept <a href="#">&nbsp;terms of service</a></span>
									</label>
									@error('remember')
										<div class="form-text text-danger">{{ $message }} <i class="ph-x-circle me-1"></i></div>
                                    @enderror
								</div>

								<button type="submit" class="btn btn-teal w-100">Register</button>
							</div>
						</div>
					</form>
					<!-- /registration form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2024 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Skyglobals</a></span>

						<!-- <ul class="nav">
							<li class="nav-item">
								<a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://themes.kopyov.com/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-file-text"></i>
										<span class="d-none d-md-inline-block ms-2">Docs</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-shopping-cart"></i>
										<span class="d-none d-md-inline-block ms-2">Purchase</span>
									</div>
								</a>
							</li>
						</ul> -->
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
