<template>
    <div>
        <div class="product-details-area mtb-60px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-img product-details-tab">
                            <div class="zoompro-wrap zoompro-2"  v-if="product">
                                <div class="zoompro-border zoompro-span">
                                    <img class="zoompro" :src="'/storage/products/300x300/'+product.product_image" :data-zoom-image="'/storage/products/800x800/'+product.product_image" alt="" />
                                </div>
                            </div>
                            <div id="gallery" class="product-dec-slider-2 swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" v-for="image in images" :key="image.id">
                                        <a :data-image="'/storage/products/galleries/300x300/'+image.full" :data-zoom-image="'/storage/products/galleries/800x800/'+image.full">
                                            <img class="img-responsive" :src="'/storage/products/galleries/300x300/'+image.full" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-content">
                            <h2>{{ product.name }}</h2>
                            <p class="reference">Reference:<span> {{ product.sku }}</span></p>
                            <p class="reference">Status:
                                <span v-if="product.quantity >= product.stock" style="color: #14d118"> En stock </span>
                                <span v-else style="color: red"> Stock épuisé </span>
                            </p>
                            <div class="pricing-meta">
                                <ul>
                                    <template v-if="product.sale_price">
                                        <li class="old-price-cut">{{ product.price}} CFA</li>
                                        <li class="current-price">{{ product.sale_price }} CFA</li>
                                    </template>
                                    <li v-else class="old-price not-cut">{{ product.price}} CFA</li>
                                </ul>
                            </div>
                            <div class="pro-details-list" v-html="product.details"></div>
                             <div v-if="product.quantity > product.stock">
                                    <div class="pro-details-quality">
                                        <div class="product-qty-container">
                                           <div class="product-qty-box">
                                                <div class="btn-qty" @click="decrement"><button>-</button></div>
                                                <input type="number" min="0" :max="product.quantity" v-model="qty">
                                                <div class="btn-qty" @click="increment"><button>+</button></div>
                                           </div>
                                        </div>


                                        <div class="pro-details-cart btn-hover">
                                            <button type="submit" @click.prevent="addProduct">  Ajouter au panier</button>
                                        </div>
                                    </div>	
                                </div>
                            <div class="pro-details-policy">
                                <ul>
                                    <li><img src="assets/images/icons/policy.png'" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                    <li><img src="assets/images/icons/policy-2.png'" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                    <li><img src="assets/images/icons/policy-3.png'" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="description-review-area mb-60px">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a data-toggle="tab" href="#des-details1">Description</a>
                        <a class="active" data-toggle="tab" href="#des-details2">Caractéristiques</a>
                        <a data-toggle="tab" href="#des-details3">Reviews (2)</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details2" class="tab-pane active">
                            <div class="product-anotherinfo-wrapper" v-html="product.caracteristique"></div>
                        </div>
                        <div id="des-details1" class="tab-pane">
                            <div class="product-description-wrapper" v-html="product.description"></div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="review-wrapper">
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/1.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>
                                                        Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review child-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/2.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form action="#">
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Email" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="Your Review" placeholder="Message"></textarea>
                                                            <input type="submit" value="Submit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { EventBus } from "../event-bus.js";
export default {
    props:{
        product: {
            require: true,
            type: Object
        },

        images:{
            type: Array
        }
    },

    data(){
        return{
            qty: 1
        }
    },

    watch : {
        qty:function(val) {
           if(val > this.product.quantity){
               return this.qty = this.product.quantity
           } else if(val < 0){
               return this.qty = 1
           } 
        },
    },

    methods:{
        addProduct(){
            window.axios.post('/product/add/cart', {
                qty: this.qty,
                productId : this.product.id,
                image: this.product.product_image,
                slug: this.product.slug,
                price: this.product.sale ? this.product.sale_price : this.product.price
            })
            .then(response => {
                if(response.data.code == 200){
                    this.$swal({
                        toast: true,
                        icon: 'success',
                        title: response.data.message,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    EventBus.$emit("cart-listener");
                }
            })
        },

        decrement(){
            if(this.qty <= 1){
                return this.qty = 1
            } else {
                return this.qty -= 1
            }
        },

        increment(){
            if(this.qty >= this.product.quantity){
                return this.qty = this.product.quantity
            } else {
                return this.qty += 1
            }
        }
    },
}
</script>

<style>
.product-qty-container {
    border: 1px solid #e8e8e8;
    display: inline-block;
    height: 48px;
    width:100%;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 80px;
}

.product-qty-box{
    width: inherit;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.product-qty-container input {
   width: 50%;
   text-align: center;
}

.product-qty-container input::-webkit-outer-spin-button,
.product-qty-container input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.product-qty-container input[type=number] {
  -moz-appearance: textfield;
}

.btn-qty{
   display: block;
   height: 100%;
   width: 30%;
   display: flex;
   align-items: center;
   justify-content: center;
   background: #f5f4f4;
   cursor: pointer;
}

.btn-qty button{
    font-size: 15px;
    color: black
}

</style>