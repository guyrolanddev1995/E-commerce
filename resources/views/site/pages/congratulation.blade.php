@extends('layouts.app')

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
                        <li class="trail-item trail-end">
                            Checkout
                        </li>
                        <li class="trail-item trail-end active">
                            validé
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="checkout-wrapp">
            <div class="end-checkout-wrapp">
                <div class="end-checkout checkout-form">
                    <div class="icon">
                    </div>
                    <h3 class="title-checkend">
                        Félicitations! Votre commande a été traitée.
                    </h3>
                    <div class="sub-title">
                        
                    </div>
                    <a href="{{ route('site.home')}}" class="button btn-return">Retour à la boutique</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection