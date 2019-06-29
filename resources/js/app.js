/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment'
import axios from 'axios'

window.moment = moment
window.axios = axios

import { Form, HasError, AlertError, AlertErrors, AlertSuccess } from 'vform'


window.Form = Form


Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import DashboardComponent from './components/DashboardComponent.vue'
import ProfileComponent from './components/ProfileComponent.vue'
import UsersComponent from './components/UsersComponent.vue'

let routes = [

    { path: '/dashboard', component:DashboardComponent },
    { path: '/profile', component: ProfileComponent },
    { path: '/users', component: UsersComponent }
    // { path: '/profile', component: require('./components/Profile.vue') }

  ];


const router = new VueRouter({

    mode: 'history',

    routes// short for `routes: routes`

  });

// global filters

/*
Vue.filter('upText',function(value){

  return value.charAt(0).toUpperCase() + value.slice(1)

})

*/

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('dashboard', require('./components/Dashboard.vue').default);
// Vue.component('profile', require('./components/Profile.vue').default);
// Vue.component('users', require('./components/Users.vue').default);
// Vue.component('dashboard', require('./components/Dashboard.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router


});
