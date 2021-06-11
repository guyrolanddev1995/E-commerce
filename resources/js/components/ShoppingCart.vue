<template>
  <div class="cart-main-area mtb-60px">
    <div class="container px-lg-5">
      <h3 class="cart-page-title">Panier</h3>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div v-if="cart != null && cart.length > 0">
            <div class="table-content table-responsive cart-table-content">
              <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Prix unitaire</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <shopping-cart-item
                    v-for="item in cart"
                    :key="item.id"
                    :data="item"
                  />
                </tbody>
              </table>
            </div>
            <div class="row mt-5">
              <div class="col-lg-12">
                <div class="d-flex justify-content-end align-items-end w-full">
                  <span style="font-size: 16px; font-weight: bold; color: black"
                    >Total:</span
                  >
                  <span
                    style="font-size: 24px; color: #146cda"
                    class="inline-block ml-4 font-weight-bold"
                    >{{ total }} XOF</span
                  >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="cart-shiping-update-wrapper">
                  <div class="d-flex cart-clear justify-content-end">
                    <button>Poursuivre vos achats</button>
                    <a href="#">Finaliser votre commande</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div v-else class="w-100 d-flex justify-content-center align-items-center h-50">
              <div class="text-center">
                  <img src="/images/empty.svg" alt="" width="300px" height="300px">
                  <h4 class="text-center">Votre panier est vide</h4>
                  <a href="#" class="text-primary d-inline-block mt-3 font-weight-bold text-center">Commencer vos Achats</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container">
                    <h3 class="cart-page-title">Your cart items</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Until Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$70.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$80.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$90.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="#">Continue Shopping</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button>Update Shopping Cart</button>
                                                <a href="#">Clear Shopping Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="cart-tax">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                        </div>
                                        <div class="tax-wrapper">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <div class="tax-select-wrapper">
                                                <div class="tax-select">
                                                    <label>
                                                        * Country
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select">
                                                    <label>
                                                        * Region / State
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select mb-25px">
                                                    <label>
                                                        * Zip/Postal Code
                                                    </label>
                                                    <input type="text" />
                                                </div>
                                                <button class="cart-btn-2" type="submit">Get A Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-lm-30px">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                        </div>
                                        <div class="discount-code">
                                            <p>Enter your coupon code if you have one.</p>
                                            <form>
                                                <input type="text" required="" name="name" />
                                                <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-30px">
                                    <div class="grand-totall">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                        </div>
                                        <h5>Total products <span>$260.00</span></h5>
                                        <div class="total-shipping">
                                            <h5>Total shipping</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                                <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
  </div>
</template>

<script>
import ShoppingCartItem from "./ShoppingCartItem.vue";
import { EventBus } from "../event-bus.js";
export default {
  components: { ShoppingCartItem },
  data() {
    return {
      total: null,
      cart: null,
    };
  },

  methods: {
    async getCart() {
      await window.axios.get("/cart/all").then((response) => {
        (this.total = response.data.total), (this.cart = response.data.cart);
      });
    },
  },

  mounted() {
    this.getCart();

    EventBus.$on("cart-listener", () => {
      this.getCart();
    });
  },
};
</script>

<style>
.product-qty-container {
  border: 1px solid #e8e8e8;
  display: flex;
  align-items: center;
  height: 35px;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 80px;
}

.product-qty-box {
  width: inherit;
  height: 100%;
  display: flex;
  justify-content: space-between;
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

.product-qty-container input[type="number"] {
  -moz-appearance: textfield;
}

.btn-qty {
  display: block;
  height: 100%;
  width: 30%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f5f4f4;
  cursor: pointer;
}

.btn-qty button {
  font-size: 15px;
  color: black;
}

.cart-plus-minus-qty {
  display: flex;
  justify-content: center;
  height: 40px;
  padding: 0;
  position: relative;
  width: 110px;
}

.table-responsive table {
  width: 100%;
}

.table-responsive {
  overflow-x: auto !important;
}
</style>