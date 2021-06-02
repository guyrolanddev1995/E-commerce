@extends('layouts.app')

@section('content')
@include('site.partials.banner')
<div class="feature-area mt-60px mb-30px">
    <div class="feature-tab-area mt-60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-underline">
                        <ul class="nav-tabs nav">
                            <li><a class="active" data-toggle="tab" href="#newarrival">New Arrival</a></li>
                            <li><a  data-toggle="tab" href="#bestseller">Bestseller</a></li>
                            <li><a  data-toggle="tab" href="#featured">Featured</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="newarrival" class="tab-pane active">
                    <div class="feature-slider slider-nav-style-1">
                        <div class="feature-slider-wrapper swiper-wrapper">
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                 <Product-component></Product-component>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div id="bestseller" class="tab-pane fade">
                    <div class="feature-slider slider-nav-style-1">
                        <div class="feature-slider-wrapper swiper-wrapper">
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                 <Product-component></Product-component>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div id="featured" class="tab-pane fade">
                    <div class="feature-slider slider-nav-style-1">
                        <div class="feature-slider-wrapper swiper-wrapper">
                            <!-- Single Item -->
                            <div class="feature-slider-item swiper-slide">
                                 <Product-component></Product-component>
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
            <div id="tab-1" class="tab-pane active">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-lm-55px">
                        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                            <div class="feature-slider-wrapper swiper-wrapper">
                                <!-- Single Item -->
                                <div class="feature-slider-item swiper-slide">
                                    <Product-component></Product-component>
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
                                    <Product-component></Product-component>
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
                                <div class="feature-slider-item swiper-slide">
                                    <Product-component></Product-component>
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
                    <Product-component></Product-component>
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