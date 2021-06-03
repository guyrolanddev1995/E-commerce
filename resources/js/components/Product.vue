<template>
    <article class="list-product">
        <div class="img-block">
            <a href="single-product.html" class="thumbnail">
                <img
                    class="first-img"
                    :src="'storage/products/300x300/'+product.product_image"
                    alt=""
                />
            </a>
            <div class="quick-view">
                <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-toggle="modal"
                    data-target="#exampleModal"
                >
                    <i class="icon-magnifier icons"></i>
                </a>
            </div>
        </div>
        <ul class="product-flag">
            <li class="new" v-if="product.is_new == 1">New</li>
        </ul>
        <div class="product-decs">
            <a class="inner-link" href="shop-4-column.html"
                ><span>{{ product.name}}</span></a
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
                    <li class="old-price not-cut">{{ product.price }} CFA</li>
                </ul>
            </div>
        </div>
        <div class="add-to-link">
            <ul>
                <li class="cart">
                    <a class="cart-btn" href="#">Ajouter au panier </a>
                </li>
            </ul>
        </div>
    </article>
</template>

<script>
export default {
    props:{
        product: Object
    },

    data(){
        return{

        }
    },

    mounted(){
        console.log(this.product)
    }
};
</script>

<style></style>
