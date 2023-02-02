require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);


import CompaniesCreate from './components/companies/CompaniesCreate.vue';


const routes = [
 {
 path: '/',
 components: {
 companiesIndex: CompaniesCreate
 }
 },
 
    
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
