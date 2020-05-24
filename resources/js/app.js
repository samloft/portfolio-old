window.Vue = require('vue');

Vue.component('works', require('./components/Works.vue').default);
Vue.component('mobile-menu', require('./components/MobileMenu.vue').default);
Vue.component('enlarge-image', require('./components/EnlargeImage.vue').default);

const app = new Vue({
    el: '#app',
});
