@extends('layouts.app')

@section('content')
@include('site.partials.header')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Panier</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<shopping-cart></shopping-cart>
@endsection