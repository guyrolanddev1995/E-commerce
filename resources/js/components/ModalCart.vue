<template>
   <div class="inner">
        <div class="head">
            <span class="title">Mon Panier</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list" v-if="count > 0">
                <li v-for="item in cart" :key="item.id">
                    <a href="single-product.html" class="image"><img :src="'/storage/products/300x300/'+item.attributes['image']" :alt="item.name" style="height: 100px"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">
                            {{ item.name }}
                        </a>
                        <span class="quantity-price">{{ item.quantity }} x <span class="amount">{{ item.price }} XOF</span></span>
                        <button @click="removeItem(item.id)" class="remove">×</button>
                    </div>
                </li>
            </ul>

            <div v-else class="d-flex justify-content-center align-items-center w-100 h-100">
                <div class="text-center">
                    <img src="/images/empty.svg" alt="" width="200px" height="200px">
                    <h4 class="text-center">Votre panier est vide</h4>
                    <a href="#" class="text-primary d-inline-block mt-3 font-weight-bold text-center">Commencer vos Achats</a>
                </div>
            </div>
        </div>
        <div class="foot" v-if="count > 0">
            <div class="sub-total">
                <strong>Total :</strong>
                <span class="amount">{{ total }} XOF</span>
            </div>
            <div class="buttons">
                <a href="/cart" class="btn btn-dark btn-hover-primary mb-30px">Voir Mon Panier</a>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">Payer maintenant</a>
            </div>
        </div>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
    data(){
        return{
            total: null,
            cart: null,
            count: 0
        }
    },

    methods:{
        async getCart() {
            await window.axios.get("/cart/all").then(response => {
                this.total = response.data.total
                this.cart = response.data.cart
                this.count = response.data.count
            });
        },

        removeItem(id){
            this.$swal({
                    icon: 'warning',
                    title: 'Voulez-vous supprimer ce produit du panier?',
                    showConfirmButton: true,
                    showDenyButton: true,
                    denyButtonText: 'Non',
                })
                .then(response => {
                   if(response.isConfirmed){
                       window.axios.delete(`/cart/item/${id}/remove`)
                             .then(response => {
                                if(response.data.code == 200){
                                    this.toastAlert(response.data.message, 'warning')
                                    EventBus.$emit("cart-listener");
                                }
                             })
                   }
                })
        },

        toastAlert(message, icon){
            this.$swal({
                toast: true,
                icon: icon,
                title: message,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
        }
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