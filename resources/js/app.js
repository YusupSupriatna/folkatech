/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router';
// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */


// Import components
import App from './components/App.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';
import Home from './components/user/Home.vue';
// import ProductList from './components/ProductList.vue';
// import ProductForm from './components/ProductForm.vue';
// import Product from './components/Product.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Login },
        { path: '/login', component: Login },
        { path: '/register', component: Register },
        { path: '/home', component: Home },
        // { path: '/products/create', component: ProductForm },
        // { path: '/products/:id', component: Product },
        // { path: '/products/:id/edit', component: ProductForm },
    ]
});

const app = createApp(App);

// Make BootstrapVue available throughout your project
app.use(router);
app.mount('#app');

