import AllProducts from './components/AllProducts.vue';
import AddProduct from './components/AddProduct.vue';
import EditProduct from './components/EditProduct.vue';
import ContactForm from './components/ContactForm.vue';
// import Home from './components/HomeProduct.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProducts
    },
    {
        name: 'add',
        path: '/add',
        component: AddProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'contact',
        path: '/contact',
        component: ContactForm
    }
];
