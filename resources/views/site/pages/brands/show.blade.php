@extends('layouts.app')

@section('content')
<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{ route('site.home') }}">Accueil</a>
                        </li>
                        <li class="trail-item trail-end active">
                            {{ $brand->name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">
                        {{ $brand->name }}
                    </h3>
                    
                    <ul class="row list-products auto-clear equal-container product-grid">
                        @foreach($products as $product)
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
                                        <span class="onnew">
                                            <span class="text">
                                                new
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="{{ route('product.details', $product->slug) }}">
                                            <img src="{{ asset('storage/'.$product->product_image) }}" alt="img">
                                        </a>
                                        <div class="thumb-group">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <div class="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                            <div class="loop-form-add-to-cart">
                                                <button class="single_add_to_cart_button button">Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a>
                                    </h5>
                                    <div class="group-info">
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <div class="price">
                                           
                                            <ins>
                                                {{ $product->price }} CFA
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                       
                    </ul>
                    @if($products->hasPages())
                        <div class="pagination clearfix style2">
                            <div class="nav-link">
                                <a href="{{ $products->previousPageUrl() }}" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <a href="{{ $products->url($i) }}" class="page-numbers {{ $products->currentPage() == $i ? 'current' : '' }}">{{ $i }}</a>
                                @endfor
                                <a href="{{ $products->nextPageUrl() }}" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endif
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection