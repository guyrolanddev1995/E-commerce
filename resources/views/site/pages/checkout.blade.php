{{-- @extends('layouts.app')

@section('content')
<div class="main-content main-content-checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{ route('site.home')}}">Accueil</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            Checkout
        </h3>
        <div class="checkout-wrapp">
            <div class="shipping-address-form-wrapp">
                <form method="post" action='{{ route('check-out.store')}}'>
                    @csrf
                    <div class="shipping-address-form  checkout-form">
                        <div class="row-col-1 row-col">
                            <div class="shipping-address">
                                <h3 class="title-form">
                                    Adresse de livraison
                                </h3>
                                <p class="form-row form-row-first">
                                    <label class="text">Nom<span class="text-danger">*</span></label>
                                    <input type="text" name="nom" class="input-text" value={{ old('nom', Auth::user()->nom) }}>
                                    @error('nom')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>
                                <p class="form-row form-row-last">
                                    <label class="text">Prenom<span class="text-danger">*</span></label>
                                    <input type="text" name="prenom" class="input-text" value={{ old('prenom',  Auth::user()->prenom) }}>
                                    @error('prenom')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>

                                <p class="form-row">
                                    <label class="text">Numero de téléphone<span class="text-danger">*</span></label>
                                    <input type="text" name="phone1" class="input-text" value="{{ old('phone1')}}">
                                    @error('phone1')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>

                                <p class="form-row">
                                    <label class="text">Numero de téléphone supplementaire(Optionnel)</label>
                                    <input type="text" name="phone2" class="input-text" value="{{ old('phone2')}}">
                                     @error('phone2')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>

                                <p class="form-row">
                                    <label class="text">Adresse<span class="text-danger">*</span></label>
                                    <textarea name="adresse" placeholder="Rue\Appartement\Batiment" rows="5">{{ old('adresse')}}</textarea>
                                    @error('adresse')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>

                                <p class="form-row">
                                    <label class="text">Région<span class="text-danger">*</span></label>
                                    <input name="region" type="text" class="input-text" value="{{ old('region')}}">
                                    @error('region')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </p>

                                <p class="form-row">
                                    <label class="text">Ville<span class="text-danger">*</span></label>
                                    <input name="ville"  type="text" class="input-text " value="{{ old('ville')}}">
                                </p>
                                
                            </div>
                        </div>
                        <div class="row-col-2 row-col">
                            <div class="your-order">
                                <h3 class="title-form">
                                    Vos commandes
                                </h3>
                                <ul class="list-product-order">
                                @foreach(\Cart::getContent() as $item)
                                    <li class="product-item-order">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="{{ asset('storage/'.$item->attributes['image']) }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="product-order-inner">
                                            <h5 class="product-name">
                                                <a href="#">{{ $item->name}}</a>
                                            </h5>
                                            <div class="price">
                                                {{ $item->price }} CFA <br>
                                                <span class="count">x {{ $item->quantity}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                
                                </ul>
                                <div class="order-total">
                                        <span class="title">
                                            Prix Total:
                                        </span>
                                    <span class="total-price">
                                            {{ \Cart::getSubTotal() }} CFA <br>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button button-payment">Confirmer le paiement</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}

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
						<li><a href="index.html">Panier</a></li>
						<li>Finalisation de la commande</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="checkout-area mt-60px mb-40px">
    <div class="container">
       <form method="post" action="{{ route('check-out.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Adresse de Lvraison</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Nom<span class="text-danger">*</span></label>
                                    <input type="text" name="nom" class="@error('nom') is-invalid @enderror" value="{{ old('nom', Auth::user()->nom) }}" placeholder="Entrer votre nom"/>
                                    @error('nom')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Prénom<span class="text-danger">*</span></label>
                                    <input type="text" name="prenom" class="@error('prenom') is-invalid @enderror" value="{{ old('prenom', Auth::user()->prenom) }}" placeholder="Entrer votre prénom"/>
                                    @error('prenom')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Numéro de téléphone mobil<span class="text-danger">*</span></label>
                                    <input type="text" class="@error('phone1') is-invalid @enderror" name="phone1" placeholder="0707070707" value="{{ old('phone', Auth::user()->phone) }}"/>
                                    @error('phone1')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Numero de téléphone supplementaire(Optionnel)</label>
                                    <input type="text" class="@error('phone2') is-invalid @enderror" name="phone2" value="{{ old('phone2')}}" placeholder="0707070707"/>
                                    @error('phone2')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Région<span class="text-danger">*</span></label>
                                    <input name="region" class="@error('region') is-invalid @enderror" type="text" value="{{ old('region')}}" placeholder="Entrer votre région"/>
                                    @error('region')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Ville<span class="text-danger">*</span></label>
                                    <input name="ville" class="@error('ville') is-invalid @enderror" type="text" value="{{ old('ville')}}" placeholder="Entrer votre ville"/>
                                    @error('ville')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="additional-info-wrap">
                            <div class="additional-info">
                                <label>Adresse <span class="text-danger">*</span></label>
                                <textarea class="@error('adresse') is-invalid @enderror" placeholder="Rue/ Appartement / Suite / Bloc / Batiment" name="adresse">{{ old('adresse')}}</textarea>
                                @error('adresse')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Votre commande</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Produits</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @foreach (\Cart::getContent() as $item )
                                            <li><span class="order-middle-left">{{ Str::limit($item->name, 47, '') }}</span> <span class="order-price">{{ $item->price }} XOF</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>{{ \Cart::getSubTotal() }} XOF</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <button class="btn-hover">Confirmer votre commande</button>
                        </div>
                    </div>
                </div>
            </div>
       </form>
    </div>
</div>

@endsection