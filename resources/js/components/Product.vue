<template>
    <div>
        <article class="list-product" v-if="product">
            <div class="img-block">
                <a :href="'/products/'+product.slug" class="thumbnail">
                    <img
                        class="first-img"
                        :src="'/storage/products/300x300/' + product.product_image"
                        :alt="product.name"
                    />
                </a>
                <div class="quick-view">
                    <a class="quick_view" href="#">
                        <i class="icon-magnifier icons"></i>
                    </a>
                </div>
            </div>
            <ul class="product-flag">
                <li class="new" v-if="product.is_new == 1">New</li>
            </ul>
            <div class="product-decs">
                <a class="inner-link" :href="'/products/'+product.slug"
                    ><span>{{ product.name }}</span></a
                >
                <div class="rating-product">
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                    <i class="ion-android-star"></i>
                </div>

                <div class="pricing-meta">
                    <ul>
                       <template v-if="product.sale_price">
                            <li class="old-price">{{ product.price}} CFA</li>
                            <li class="current-price">{{ product.sale_price }} CFA</li>
                       </template>

                        <li v-else class="old-price not-cut">{{ product.price}} CFA</li>
                       
                    </ul>
                </div>
                
                <div class="add-to-link">
                    <ul>
                        <li class="cart">
                            <a class="cart-btn" @click.prevent="addToCart" :disabled="loading">Ajouter au panier </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>        
    </div>
</template>

<script>
import ProductModal from './ProductModal'
import { EventBus } from "../event-bus.js";
export default {
    components:{
        ProductModal
    },
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
    },

    mounted() {
    
    }
};
</script>

<style></style>
