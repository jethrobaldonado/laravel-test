require('./bootstrap');

import Vue from 'vue';
import App from './src/App';
import VueCompositionApi from '@vue/composition-api';

Vue.use(VueCompositionApi);
const app = new Vue({
    el: '#app',
    components: { App }
});
