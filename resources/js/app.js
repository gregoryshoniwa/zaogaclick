
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import iView from 'iview';
import 'iview/dist/styles/iview.css';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(iView);
window.VueRouter = require('vue-router').default;
window.VueAxios = require('vue-axios').default;
window.Axios = require('axios').default;

let AppLayout = require('./components/App.vue');

// show the list of all posted pastors templete
const Listpastors = Vue.component('Listpastors',require('./components/ListPastors.vue'));

// add pastor templete
const Addpastor = Vue.component('Addpastor',require('./components/AddPastor.vue'));

// edit pastor templete
const Editpastor = Vue.component('Editpastor',require('./components/EditPastor.vue'));

// delete pastors templete
const Deletepastor = Vue.component('Deletepastor',require('./components/DeletePastor.vue'));

// view single post templete
const Viewpastor = Vue.component('Viewpastor',require('./components/ViewPastor.vue'));

//registering Modules
Vue.use(VueRouter,VueAxios,axios);

const routes = [
    {
        name: 'Listpastors',
        path:'/full-list',
        component: Listpastors
    },
    {
        name: 'Addpastor',
        path:'/add-pastor',
        component: Addpastor
    },
    {
        name: 'Editpastor',
        path:'/edit-pastor/:id',
        component: Editpastor
    },
    {
        name: 'Deletepastor',
        path:'/delete-pastor',
        component: Deletepastor
    },
    {
        name: 'Viewpastor',
        path:'/view-pastor/:id',
        component: Viewpastor
    }
];

const router = new VueRouter({mode: 'history', routes: routes});

new Vue(
    Vue.util.extend(
        {router},
        AppLayout
    )
).$mount('#app');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('menu-component', require('./components/MenuComponent.vue'));

Vue.component('content-component', require('./components/ContentComponent.vue'));


const app = new Vue({
    el: '#app'
});
*/
