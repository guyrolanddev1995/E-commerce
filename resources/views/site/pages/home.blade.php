@extends('layouts.app')

@section('content')
@include('site.partials.home.header')
<div class="feature-area mt-60px mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Nos Tendances</h2>
                </div>
            </div>
        </div>
        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
            <div class="feature-slider-wrapper swiper-wrapper">
                @foreach ($featured as $item)
                    <div class="feature-slider-item swiper-slide">
                        <product-component :product="{{ $item }}"></product-component>
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<div class="banner-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/4.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-area mt-60px mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Nouvels Arrivages</h2>
                </div>
            </div>
        </div>
        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
            <div class="feature-slider-wrapper swiper-wrapper">
                @foreach ($new_products as $item)
                    <div class="feature-slider-item swiper-slide">
                        <product-component :product="{{ $item }}"></product-component>
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

@foreach ($categories as $key1 => $categorie)
<section class="category-tab-area mt-30px mb-40px">
    <div class="container">
        <div class="section-title d-flex">
            <h2>{{ $categorie->name }}</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                @foreach($categorie->children as $key => $child)
                    <li class="nav-item">
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#tab-{{ $key1 }}-{{ $key }}">{{ $child->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content ">
            @foreach($categorie->children as $key => $child)
                <div id="tab-{{ $key1 }}-{{ $key }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-lm-55px">
                            <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                                <div class="feature-slider-wrapper swiper-wrapper">
                                    <!-- Single Item -->
                                    @foreach ($child->products as $product)
                                        <div class="feature-slider-item swiper-slide">
                                            <product-component :product="{{ $product }}"></product-component>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/7.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="assets/images/banner-image/8.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="recent-add-area mb-30px mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Récemment ajoutés</h2>
                </div>
            </div>
        </div>
        <div class="recent-slider slider-nav-style-1 multi-row-2">
            <div class="recent-slider-wrapper swiper-wrapper">
                @foreach ($recent_added->chunk(2) as $products)
                <div class="recent-slider-item swiper-slide">
                    @foreach ( $products as $item )
                        <article class="list-product mb-30px">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="{{ asset('storage/products/300x300/'.$item->product_image) }}" alt="{{ $item->name }}" />
                                </a>
                            </div>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>{{ $item->name }}</span></a>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price {{ !$item->sale_price ? 'not-cut' : '' }}">{{ $item->price }} CFA</li>
                                        @if ($item->sale_price)
                                            <li class="current-price">{{ $item->sale_price }} CFA</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

@endsection