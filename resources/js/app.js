window.Vue = require('vue');

Vue.component('works', require('./components/Works.vue').default);
Vue.component('mobile-menu', require('./components/MobileMenu.vue').default);

const app = new Vue({
    el: '#app',
});
