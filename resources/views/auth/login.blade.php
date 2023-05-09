<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>{{ config('app.name', 'Laravel') }}</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<div class="container">
			
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/logo-dark.png" alt="Le Rouge Admin Dashboard" />
								</a>
								<h5>Bienvenue à nouveau,<br />Veuillez vous connecter à votre compte.</h5>
								<div class="form-group">
									<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Entrer email" />
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Mot de passe" />
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="custom-control-label" for="remember_pwd">{{ __('Souviens-toi de moi') }}</label>
									</div>
									<button type="submit" class="btn btn-primary">{{ __('Connexion')}}</button>
								</div>
								<div class="forgot-pwd">
									<a class="link" href="#">{{ __('Mot de passe oublié?')}}</a>
								</div>
								<hr>
								<div class="actions align-left">
									<span class="additional-link">{{ __('Nouveau ici ?')}}</span>
									<a href="#" class="btn btn-dark">{{ __('Créer un compte')}}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>