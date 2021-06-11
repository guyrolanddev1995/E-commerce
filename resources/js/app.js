window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]')

if(token){
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-component', require('./components/Product.vue').default);
Vue.component('product-grid', require('./components/ProductGrid.vue').default);
Vue.component('product-detail', require('./components/ProductDetail.vue').default);
Vue.component('cart-modal', require('./components/ModalCart.vue').default);
Vue.component('cart-header', require('./components/CartHeader.vue').default);
Vue.component('shopping-cart', require('./components/ShoppingCart.vue').default);

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2)

const app = new Vue({
    el: '#app',
});
