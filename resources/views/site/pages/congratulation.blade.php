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
                        <li><a href="#">Panier</a></li>
                        <li><a href="#">Confirmation de votre commande</a></li>
                        <li>Merci</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thank-you-area mtb-60px">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="inner_complated">
                    <div class="img_cmpted"><img src="{{ asset('assets/images/icons/cmpted_logo.png') }}" alt=""></div>
                    <p class="dsc_cmpted">Merci d'avoir commandé dans notre magasin. Vous recevrez un e-mail de confirmation sous peu.</p>
                    <div class="btn_cmpted">
                        <a href="{{ route('site.home') }}" class="shop-btn" title="Go To Shop">RETOUR A LA BOUTIQUE </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="quick_order ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="main_quickorder text-align-center">
                    <h3 class="title">Appelez-nous pour une commande rapide</h3>
                    <div class="cntct typewriter-effect"><span class="call_desk"><a href="tel:+01234567890" id="typewriter_num">01 234 567 890</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection