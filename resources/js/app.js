window.Vue = require('vue');

Vue.component('works', require('./components/Works.vue').default);

const app = new Vue({
    el: '#app',
});
