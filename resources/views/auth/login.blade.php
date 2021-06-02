@extends('layouts.app')

@section('content')
<div class="main-content main-content-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index.html">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Connexion
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="site-main">
						<div class="customer_login">
							<div class="" style="display:flex; justify-content:center">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="login-item" >
										<h5 class="title-login">Connectez-vous à votre compte</h5>
										<form class="login" action="{{ route('login') }}" method="post">
                                            @csrf
											<p class="form-row form-row-wide">
												<label class="text">Adresse email</label>
												<input title="email" type="email" name="email" class="@error('email') is-invalid @enderror input-text">
                                                @error('email')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Mot de passe</label>
												<input title="password" type="password" name="password" class=" @error('password') is-invalid @enderror input-text">
                                                @error('password')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
											<p class="lost_password">
												<span class="inline">
													<input type="checkbox" id="cb1">
													<label for="cb1" class="label-text">Se souvenir de moi</label>
												</span>
												<a href="#" class="forgot-pw">Mot de passe oublié?</a>
											</p>
											<p class="form-row">
												<input type="submit" class="button-submit" value="Se connecter">
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection