import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import StoreData from './store';
import router from './routes';

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

import TheApp from './components/TheApp.vue';

const app = new Vue({
    el: '#app',
    render: h => h(TheApp),
    router,
    store
});

// $('document').ready(function() {
// 	$('.select2').select2();
// });
