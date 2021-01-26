
import ContactForm from './components/ContactForm.vue';
import Home from './components/Home.vue';
import Rides from './components/Rides.vue';
import Bikes from './components/Bikes.vue';
import BikeForm from './components/BikeForm.vue';
import RideForm from './components/RideForm.vue';

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
    }
];
