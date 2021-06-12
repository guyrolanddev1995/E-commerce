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
                        <li>Connexion</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-register-area mtb-60px">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 ml-auto mr-auto">
				@include('site.partials.flash')
				<div class="login-register-wrapper">
					<div class="login-form-container">
						<h4 class="mb-3 text-center">Se connecter</h4>
						<div class="login-register-form mt-5">
							<form action="{{ route('login') }}" method="post">
								@csrf
								<div class="form-group mb-4">
									<input type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror"  placeholder="Entrer votre adresse email" />
									@error('email')
										<div class="invalid-feedback text-danger">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group">
									<input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Entrer votre mot de passe" />
									@error('password')
										<div class="invalid-feedback text-danger">
											{{ $message }}
										</div>
									@enderror
								</div>	
								<div class="button-box">
									<div class="login-toggle-btn">
										<input type="checkbox" />
										<a class="flote-none" href="javascript:void(0)">Se souvenir de moi</a>
										<a href="#">Mot de passe oublié ?</a>
									</div>
									<button type="submit"><span>Se connecter</span></button>
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