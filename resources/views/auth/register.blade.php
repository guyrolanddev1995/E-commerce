@extends('layouts.app')

@section('content')
@include('site.partials.header')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a href="index.html">Accueil</a></li>
                        <li>Nouveau compte</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-register-area mtb-60px">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 ml-auto mr-auto">
				@include('site.partials.flash')
				<div class="login-register-wrapper">
					<div class="login-form-container">
						<h4 class="mb-3 text-center">Créer un compte</h4>
						<div class="login-register-form mt-5">
							<form action="{{ route('register') }}" method="post">
								@csrf
								<div class="row">
									<div class="col-md-6 col-12">
										<div class="form-group mb-4">
											<input type="text" name="nom" value="{{ old('nom') }}" class="@error('nom') is-invalid @enderror"  placeholder="Entrer votre nom" />
											@error('nom')
												<div class="invalid-feedback text-danger">
													{{ $message }}
												</div>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group mb-4">
											<input type="text" name="prenom" value="{{ old('prenom') }}" class="@error('prenom') is-invalid @enderror"  placeholder="Entrer votre prenom" />
											@error('email')
												<div class="invalid-feedback text-danger">
													{{ $message }}
												</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-12">
										<div class="form-group mb-4">
											<input type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror"  placeholder="Entrer votre adresse email" />
											@error('email')
												<div class="invalid-feedback text-danger">
													{{ $message }}
												</div>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="form-group mb-4">
											<input type="password" name="password" value="{{ old('passwor') }}" class="@error('email') is-invalid @enderror"  placeholder="Entrer votre mot de passe" />
											@error('password')
												<div class="invalid-feedback text-danger">
													{{ $message }}
												</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-2">
										<div class="form-group mb-4">
											<input type="text" name="prefix" value="+225" disabled/>
										</div>
									</div>
									<div class="col-md-10 col-10">
										<div class="form-group mb-4">
											<input type="text" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror"  placeholder="Entrer votre numéro de téléphone" />
											@error('phone')
												<div class="invalid-feedback text-danger">
													{{ $message }}
												</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="button-box">
									<button type="submit"><span>Créer votre compte</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection