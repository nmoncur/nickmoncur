import Vue from 'vue'
import VueProgressiveImage from 'vue-progressive-image'
import VueRouter from 'vue-router'
import VueScrollTo from 'vue-scrollto'
import axios from 'axios'

Vue.use(VueProgressiveImage)
Vue.use(VueRouter)
Vue.use(VueScrollTo, {
  container: "body",
  duration: 500,
  easing: "ease",
  offset: 0,
  cancelable: true,
  onStart: false,
  onDone: false,
  onCancel: false,
  x: false,
  y: true
})

import App from './views/App'
import Dev from './views/Dev'
import Home from './views/Home'
import Pay from './views/Pay'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/dev',
      name: 'dev',
      component: Dev,
    },
    {
      path: '/sign-up',
      name: 'pay',
      component: Pay,
    },
  ],
  scrollBehavior () {
    return { x: 0, y: 0 }
  }
});

axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const app = new Vue({
  el: '#app',
  components: { App },
  router,
})
