require('./bootstrap');

window.Vue = require('vue').default;

import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Vuex from 'vuex';
import Axios from 'axios';
import {routes} from './routes'
import store from './store.js'

Vue.prototype.$http = Axios;
const token = localStorage.getItem('token')
if (token) {
  Vue.prototype.$http.defaults.headers.common['Authorization'] = token
}

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(Vuex);

const router = new VueRouter({
   mode: 'history',
   routes: routes
 });

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App),
  store:store
});
