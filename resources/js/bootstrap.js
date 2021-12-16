try {
    require('bootstrap');
} catch (e) {}

import vue from 'vue';
window.Vue = vue;

import axios from "axios";
window.axios = axios;


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';