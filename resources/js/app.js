window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]')

if(token){
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-component', require('./components/Product.vue').default);

const app = new Vue({
    el: '#app',
});
