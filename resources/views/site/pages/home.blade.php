@extends('layouts.app')

@section('content')
<div class="feature-area mt-60px mb-30px">
    <products-slide-2-component></products-slide-2-component>
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
<section class="category-tab-area mt-30px mb-40px">
    <div class="container">
        <div class="section-title d-flex">
            <h2>Smart Electronics</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1">Smart Home Appliances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">Smart Remote Controls</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">Smart Watches</a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content ">
            <!-- 1st tab start -->
            <div id="tab-1" class="tab-pane active ">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-lm-55px">
                        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
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
            <!-- 1st tab end -->
            <!-- 2nd tab start -->
            <div id="tab-2" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-lm-55px">
                        <div class="feature-slider-two slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
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
            <!-- 2nd tab end -->
            <!-- 3rd tab start -->
            <div id="tab-3" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-lm-55px">
                        <div class="feature-slider-two slider-nav-style-1">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="icon-magnifier icons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                <li>
                                                    <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
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
            <!-- 3rd tab end -->
        </div>
    </div>
</section>
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
                    <h2 class="section-heading">Recently Added</h2>
                </div>
            </div>
        </div>
        <div class="recent-slider slider-nav-style-1 multi-row-2">
            <div class="recent-slider-wrapper swiper-wrapper">
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                    <li class="discount-price">-10%</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/17.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/18.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/22.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                    <li class="discount-price">-10%</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/23.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/24.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/25.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/28.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/29.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="recent-slider-item swiper-slide">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
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