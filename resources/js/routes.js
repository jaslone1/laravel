import Login from './components/Login.vue';
import Secure from './components/Secure.vue';
import Register from './components/Register.vue';
import ContactForm from './components/ContactForm.vue';
import Home from './components/Home.vue';
import Rides from './components/Rides.vue';
import Bikes from './components/Bikes.vue';
import BikeForm from './components/BikeForm.vue';
import RideForm from './components/RideForm.vue';

import store from './store'
import Router from 'vue-router'
Vue.use(Router)
import Vue from 'vue'
import Vuex from "vuex"
Vue.use(Vuex);

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'contact',
        path: '/contactJared',
        component: ContactForm
    },
    {
        name: 'rides',
        path: '/rides',
        component: Rides
    },
    {
        name: 'bikes',
        path: '/bikes',
        component: Bikes
    },
    {
        name: 'rideform',
        path: '/addRide',
        component: RideForm
    },
    {
        name: 'bikeform',
        path: '/addBike',
        component: BikeForm
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'secure',
        path: '/secure',
        component: Secure,
        meta: {
          requiresAuth: true
        }
    }
];

// router.beforeEach((to, from, next) => {
//   if(to.matched.some(record => record.meta.requiresAuth)) {
//     if (store.getters.isLoggedIn) {
//       next()
//       return
//     }
//     next('/login')
//   } else {
//     next()
//   }
// })
