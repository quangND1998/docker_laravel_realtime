require('./bootstrap')
    /* eslint-disable no-unused-vars */
import App from './App.vue'
import router from './router'
import './filters'

import Vue from 'vue'

window.Vue = require('vue')
    // eslint-disable-next-line no-undef
    // eslint-disable-next-line no-undef

// eslint-disable-next-line no-undef
const app = new Vue({
    render: h => h(App),
    router,
    data: {
        user: window.__app__.user, // we always have user if they login as we return user object in app.blade.php
        rooms: window.__app__.rooms,
        appName: 'Realtime Chat | Laravel, VueJS, Redis, Laravel Echo, SocketIO'
    }
}).$mount('#app')