<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">
                        {{ title }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
            <div class="feature-slider-wrapper swiper-wrapper">
                <div class="feature-slider-item swiper-slide" v-for="n in 15" :key="n">
                   <Product/>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</template>

<script>
import Product from './Product'
export default {
    props:{
        title: String
    },
    components:{
        Product
    }
}
</script>

<style>

</style>