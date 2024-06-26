import './bootstrap';
import 'primevue/resources/themes/aura-light-green/theme.css';
import 'primeicons/primeicons.css';

import { createApp } from 'vue'
import Router from "./router";
import PrimeVue from 'primevue/config';
import { createHead } from '@vueuse/head';
const head = createHead();

// Components
import App from './App.vue';

const app = createApp(App);
app.use(PrimeVue, {unstyled: false});
app.use(Router, {});
app.use(head, {});

app.mount('#app');
