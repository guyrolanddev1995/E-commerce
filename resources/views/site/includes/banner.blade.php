<div class="col-lg-7 custom-col custom-col-3">
    <div class="slider-area slider-height-2">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <!-- Single Slider  -->
                @foreach ($carousels as $carousel)
                    <div class="swiper-slide bg-img d-flex" style="background-image: url({{ asset('storage/carousels/'.$carousel->url) }});"></div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
    </div>
    <!-- Slider End -->
</div>
<div class="col-lg-3">
    <div class="banner-area banner-area-2">
        <div class="banner-wrapper mb-15px">
            <a href="shop-4-column.html"><img src="assets/images/banner-image/9.jpg" alt="" /></a>
        </div>
        <div class="banner-wrapper">
            <a href="shop-4-column.html"><img src="assets/images/banner-image/10.jpg" alt="" /></a>
        </div>
    </div>
</div>