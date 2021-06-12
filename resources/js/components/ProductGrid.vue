<template>
    <div class="shop-list-wrap mb-30px scroll-zoom">
        <div class="row list-product m-0px">
            <div class="col-md-12 padding-0px">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <div class="left-img">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img
                                        class="first-img"
                                       :src="'/storage/products/300x300/' + product.product_image"
                                       :alt="product.name"
                                    />
                                </a>
                            </div>
                            <ul class="product-flag">
                                <li class="new" v-if="product.is_new == 1">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                        <div class="product-desc-wrap">
                            <div class="product-decs">
                                <a class="inner-link" :href="'/products/'+product.slug"><span>{{ product.name }}</span></a>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                            </div>
                            <div class="box-inner">
                                <div class="in-stock">
                                    Disponibilité: <span>299 In Stock</span>
                                </div>
                                <div class="pricing-meta">
                                    <div class="grid-pricing" v-if="product.sale_price">
                                        <span class="old-price-grid">{{ product.price}} CFA</span>
                                        <span class="grid-current-price">{{ product.sale_price}} CFA</span>
                                    </div>
                                    <ul v-else>
                                        <li class="old-price not-cut">{{ product.price}} CFA</li>
                                    </ul>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart">
                                            <a
                                                title="Ajouter au panier"
                                                class="cart-btn"
                                                @click.prevent="addToCart" 
                                                :disabled="loading"
                                                >Ajouter au panier
                                            </a>
                                        </li>
                                    </ul>
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
    props: {
        product: Object
    },

    data() {
        return {
            loading: false
        };
    },
    
    methods:{
        addToCart(){
            this.loading = true
            window.axios.post('/product/add/cart', {
                qty: 1,
                productId : this.product.id,
                image: this.product.product_image,
                slug: this.product.slug,
                price: this.product.sale ? this.product.sale_price : this.product.price
            })
            .then(response => {
                this.loading = false
                if(response.data.code == 200){
                    EventBus.$emit("cart-listener");
                    this.$swal({
                        icon: 'success',
                        title: response.data.message,
                        text: 'Voulez-vous accéder à votre panier ou continer votre achat ?',
                        showConfirmButton: true,
                        showDenyButton: true,
                        confirmButtonText: 'Aller au panier',
                        denyButtonText: 'Continuer ma boutique',
                    })
                    .then(response => {
                        if(response.isConfirmed){
                            window.location.href="/cart"
                        }
                    })
                }
            })
            .catch(error => this.loading = false)
        }
    }
};
</script>

<style></style>
