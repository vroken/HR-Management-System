<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('assets/auth/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="{{ asset('assets/auth/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="{{ route('register') }}" method="post">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Nama Lengkap</label>
											<input class="form-control form-control-lg @error('name')is-invalid @enderror" type="text" name="name" placeholder="Enter your name" required value="{{ old('name') }}"/>
                                            @error('name')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                            @enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Nomor Telepon</label>
											<input class="form-control form-control-lg @error('phone')is-invalid @enderror" type="number" name="phone" placeholder="Enter your phone" required value="{{ old('phone') }}"/>
                                            @error('phone')
                                                <small class="invalid-feedback">
                                                    {{ $message }}
                                                </small>
                                            @enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg @error('email')is-invalid @enderror" type="email" name="email" placeholder="Enter your email" required value="{{ old('email') }}"/>
                                            @error('email')
                                                <p class="invalid-feedback">
                                                    {{ $message }}
                                                </p>
                                            @enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg @error('password')is-invalid @enderror" type="password" name="password" placeholder="Enter password" required value="{{ old('password') }}"/>
                                            @error('password')
                                                <p class="invalid-feedback">
                                                    {{ $message }}
                                                </p>
                                            @enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input class="form-control form-control-lg @error('password_confirmation')is-invalid @enderror" type="password" name="password_confirmation" placeholder="Enter password_confirmation" required value="{{ old('password_confirmation') }}"/>
                                            @error('password_confirmation')
                                                <p class="invalid-feedback">
                                                    {{ $message }}
                                                </p>
                                            @enderror
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Already have account? <a href="pages-sign-in.html">Log In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('assets/auth/js/app.js') }}"></script>
</body>

</html>