require('./bootstrap');

import App from './App.vue';
import router from './router'
import store from './store'

const app = new Vue({
    router,
    store,
    el: '#app',
    components: {
        App
    },
    render: h => h(App)
});
