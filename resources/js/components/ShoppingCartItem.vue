<template>
  <tr>
    <td class="product-name" style="text-align: left !important; width: 60%">
      <div class="d-flex px-2 w-100">
        <div style="width: 100px; height: 75px">
          <a href="#"
            ><img
              class="img-responsive ml-1"
              :src="'storage/products/300x300/' + item.attributes['image']"
              alt=""
              style="width: 100%; height: 100%"
          /></a>
        </div>
        <a href="#" class="ml-2 w-100"
          ><strong>{{ item.name }}</strong></a
        >
      </div>
    </td>
    <td class="" style="width: 10%">
      <span class="amount">{{ item.price }} XOF</span>
    </td>
    <td class="" style="width: 10%">
      <div class="cart-plus-minus-qty">
        <div class="product-qty-container">
          <div class="product-qty-box">
            <div class="btn-qty" @click.prevent="decrement()">
              <button>-</button>
            </div>
            <input
              type="number"
              min="0"
              :max="item.quantity"
              v-model="item.quantity"
            />
            <div class="btn-qty" @click.prevent="increment()">
              <button>+</button>
            </div>
          </div>
        </div>
      </div>
    </td>
    <td class="" style="width: 8%">{{ item.price * item.quantity }} XOF</td>
    <td class="product-remove" style="4%">
      <button  @click.prevent="removeItem"><i class="icon-close"></i></button>
    </td>
  </tr>
</template>

<script>
import { EventBus } from "../event-bus.js";
export default {
    props:{
        data:{
            required: true
        }
    }, 

    data(){
        return{
            item: this.data
        }
    },

    methods:{
        updateQuantity(quantity){
            window.axios.patch(`/cart/${this.item.id}/update`, {
                quantity: quantity
            })
            .then(response => {
                if(response.data.code == 502){
                    this.notify(response.data.message, 'error')
                } else {
                    this.notify(response.data.message, 'success')
                }
            })
        },

        notify(message, icon = 'success'){
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

            EventBus.$emit("cart-listener");
        },

        decrement(){
            if(this.item.quantity <= 1){
                this.item.quantity = 1
                this.updateQuantity(this.item.quantity)
            } else {
                this.item.quantity -= 1
                this.updateQuantity(this.item.quantity)
            }
        },

        increment(){
            this.item.quantity += 1
            this.updateQuantity(this.item.quantity)
        },

        removeItem(){
            this.$swal({
                    icon: 'warning',
                    title: 'Voulez-vous supprimer ce produit du panier?',
                    showConfirmButton: true,
                    showDenyButton: true,
                    denyButtonText: 'Non',
                })
                .then(response => {
                   if(response.isConfirmed){
                       window.axios.delete(`/cart/item/${this.item.id}/remove`)
                             .then(response => {
                                if(response.data.code == 200){
                                    this.notify(response.data.message, 'warning')
                                    EventBus.$emit("cart-listener");
                                }
                             })
                   }
                })
        },

    }
};
</script>

<style>
</style>