import router from './routes'
import VueRouter from 'vue-router';
import { RouterView,RouterLink} from "vue-router";


require('./bootstrap');

window.Vue = require('vue');


Vue.component('add_property', require('./components/add_property').default);
Vue.component('properties', require('./components/properties').default);
Vue.component('update_property/', require('./components/update_property').default);
Vue.component('app', require('./components/app').default);
Vue.component('bookings', require('./components/bookings').default);


 Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router
});
