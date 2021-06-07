window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]')

if(token){
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-component', require('./components/Product.vue').default);
Vue.component('product-grid', require('./components/ProductGrid.vue').default)

Vue.filter('str_limit', function (value, size) {
    if (!value) return '';
    value = value.toString();
  
    if (value.length <= size) {
      return value;
    }
    return value.substr(0, size) + '...';
});

const app = new Vue({
    el: '#app',
});
