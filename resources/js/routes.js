import AllProducts from './components/IndexComponent.vue';
import CreateProduct from './components/CreateComponent.vue';
import EditProduct from './components/EditComponent.vue';
import Home from './components/HomeComponent.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProducts
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    }
];
