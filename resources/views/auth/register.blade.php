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
								Inscription
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
									<div class="login-item">
										<h5 class="title-login">S'inscrire</h5>
										<form class="register" action="{{ route('register') }}" method="post">
                                            @csrf
                                            <p class="form-row form-row-wide">
												<label class="text">Nom</label>
												<input title="nom" name="nom" value="{{ old('nom') }}" type="text" class="input-text">
                                                @error('nom')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
                                            <p class="form-row form-row-wide">
												<label class="text">Prénom</label>
												<input title="prenom" name="prenom" value="{{ old('prenom') }}" type="text" class="input-text">
                                                 @error('prenom')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Adresse email</label>
												<input title="email" name="email" type="email" value="{{ old('email') }}" class="input-text">
                                                  @error('email')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Numéro de téléphone</label>
												<input title="phone" name="phone" value="{{ old('phone') }}" type="text" class="input-text">
                                                 @error('phone')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
											</p>
											<p class="form-row form-row-wide">
												<label class="text">Mot de passe</label>
												<input title="password" type="password" name="password" value="{{ old('password') }}" class="input-text">
                                                @error('password')
                                                    <div class="invalid-feedback text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                
											</p>
											<p class="form-row">
												<span class="inline">
													<input type="checkbox" id="cb2">
													<label for="cb2" class="label-text">Je suis d'accord avec <span>les terms & Conditions</span></label>
												</span>
											</p>
                                            
											<p class="">
												<input type="submit" class="button-submit" value="Je m'inscris">
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