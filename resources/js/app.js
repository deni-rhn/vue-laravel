require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter,VueAxios,Axios);

import App from '../components/app.vue';
import LandingPage from '../components/landingPage.vue'

const routes = [
  {
    name: 'home',
    path: '/',
    component: App
  },
  {
    name: 'landing',
    path: '/landing',
    component: LandingPage
  }
]

const router = new VueRouter({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");
