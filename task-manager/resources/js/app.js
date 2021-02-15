/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

//Import v-from
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/HomeComponent.vue';
import Task from './components/TaskComponent.vue';
import TaskForm from './components/TaskFormComponent.vue';

const routes = [
    {
        path:'/',
        component: Home
    },
    {
        path:'/tasks',
        component: Task
    },
    {
        path:'/tasksadd',
        component: TaskForm
    }
];

const router = new VueRouter({routes})



const app = new Vue({
    el: '#app',
    router: router
});
