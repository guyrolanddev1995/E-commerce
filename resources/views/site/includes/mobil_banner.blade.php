<div class="header-menu  d-xl-none bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
            <!-- Slider Start -->
                <div class="slider-area slider-height-2 mb-md-30px mb-lm-30px mb-sm-30px">
                    <div class="hero-slider swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Single Slider  -->
                            @foreach($carousels as $carousel)
                                <div class="swiper-slide bg-img d-flex">
                                    <img src="{{ asset('storage/carousels/'.$carousel->url) }}" alt="" style="width: 100%; height: 100%">
                                </div>
                            @endforeach
                            
                            <!-- Single Slider  -->
                            
                            <!-- Single Slider  -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination-white"></div>
                    </div>
                </div>
                <!-- Slider End -->
            </div>
            <div class="col-lg-3">
                <div class="banner-area">
                    <div class="banner-wrapper mb-md-30px mb-lm-30px mb-sm-30px">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/9.jpg" alt="" /></a>
                    </div>
                    <div class="banner-wrapper mb-0px">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/10.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <!-- Static Area Start -->
    <div class="static-area  ptb-40px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Shipping</h4>
                                <p>On all orders over $75.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Returns</h4>
                                <p>Returns are free within 9 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
</div>