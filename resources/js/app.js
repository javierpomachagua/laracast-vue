/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');
window.Eve = new Vue();

import Vue from 'vue';
import VueRouter from 'vue-router';
window.Vue = Vue;
Vue.use(VueRouter);


import router from './routes';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('task-list', require('./components/TaskListComponent.vue').default);
Vue.component('task', require('./components/TaskComponent.vue').default);
Vue.component('message-box', require('./components/MessageBoxComponent.vue').default);
Vue.component('modal-component', require('./components/ModalComponent.vue').default);
Vue.component('tab-component', require('./components/TabComponent.vue').default);
Vue.component('tabs-component', require('./components/TabsComponent.vue').default);
Vue.component('coupon-component', require('./components/CouponComponent.vue').default);
Vue.component('progress-view', require('./components/ProgressViewComponent.vue').default);
Vue.component('axios-example', require('./components/AxiosExampleComponent.vue').default);
Vue.component('project-component', require('./components/ProjectComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
    // data() {
    //     return {
    //         couponApplied: false
    //     };
    // },
    // created() {
    //     // Eve.$on('applied', () => alert('Hey'));
    // },
    // methods: {
    //     onCouponApplied() {
    //         this.couponApplied = true;
    //     }
    // },
});
