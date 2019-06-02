import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Buefy from 'buefy'
import 'buefy/dist/buefy.css'
Vue.use(Buefy)

import App from './App.vue';
import CreateProject from './components/Projects/CreateProject.vue';
import DisplayProject from './components/Projects/DisplayProject.vue';
import EditProject from './components/Projects/EditProject.vue';
import Confirmation from './components/Common/Confirmation';

Vue.component('confirmation', Confirmation);
const routes = [
  {
    name: 'CreateProject',
    path: '/project/create',
    component: CreateProject
  },
  {
        name: 'DisplayProject',
        path: '/',
        component: DisplayProject
  },
  {
      name: 'EditProject',
      path: '/project/edit/:id',
      component: EditProject
   }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');