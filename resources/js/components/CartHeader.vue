<template>
   <div class="cart-info d-flex align-self-center">
        <a href="#offcanvas-cart" class="bag offcanvas-toggle" :data-number="count"><i class="icon-bag"></i><span> {{ total }} XOF</span></a>
    </div>
</template>

<script>
import { EventBus } from "../event-bus.js";
export default {
    data(){
        return{
            total: null,
            count: null
        }
    },

    methods :{
        async getCart() {
                await window.axios.get("/cart/get-cart-count").then(response => {
                    this.total = response.data.total,
                    this.count = response.data.cartCount
                });
            },
    },

    mounted(){
        this.getCart()

        EventBus.$on("cart-listener", () => {
            this.getCart()
        });
    }
}
</script>

<style>

</style>