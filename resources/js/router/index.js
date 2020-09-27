import Vue from 'vue'
import VueRouter from "vue-router";

import Home from "../pages/Home";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/posts',
            name: 'posts',
            component: () => import("../pages/Posts")
        },
        {
            path: '/about',
            name: 'about',
            component: () => import("../pages/About")
        },
    ],

    activeClass: 'active'
})
